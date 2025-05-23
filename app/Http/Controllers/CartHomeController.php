<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carts;
use App\Models\ProductsZzf;
use App\Models\ProductSellers;
use App\Models\Sellers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function store(Request $request)
    {
        // Ambil data dari request untuk item yang dipilih
        $selectedItems = $request->input('selected_items', []);
    
        // Pastikan $selectedItems adalah array
        $selectedItems = is_array($selectedItems) ? $selectedItems : [];
    
        // Ambil checkout type dari request
        $checkoutType = $request->input('checkout_type', 'purchase'); // Default ke 'purchase' jika tidak ada
    
        // Simpan selected item dan checkout type dalam session
        session([
            'selected_items' => $selectedItems,
            'checkout_type' => $checkoutType,
        ]);
    
        // Hapus item dari keranjang setelah masuk ke halaman checkout
        Carts::whereIn('id', $selectedItems)->delete();
    
        // Redirect ke halaman checkout setelah barang berhasil masuk
        return redirect()->route('checkout.index')->with('success', 'Products successfully added to checkout!');
    }
    
    public function index()
    {
        // Ambil data dari tabel cart berdasarkan customer_id
        $customerId = Auth::id(); // Mendapatkan ID customer yang login
    
        // Ambil item keranjang berdasarkan customer_id
        $cartItems = Carts::where('customer_id', $customerId)
                            ->with(['product', 'productSellers.seller']) // Ambil relasi produk dan seller
                            ->get();
        
        // Kelompokkan berdasarkan seller
        $groupedCartItems = $cartItems->groupBy(function($item) {
            if ($item->productSellers && $item->productSellers->seller) {
                return $item->productSellers->seller->name;
            }
            return 'No Seller';
        });
    
        // Hitung total harga belanjaan
        $totalPrice = $cartItems->sum(function ($cartItem) {
            if ($cartItem->product) {
                return $cartItem->product->price * $cartItem->quantity;
            } elseif ($cartItem->productSellers) {
                return $cartItem->productSellers->price * $cartItem->quantity;
            }
            return 0;
        });
    
        // Hitung jumlah item dalam keranjang
        $totalItems = $cartItems->sum('quantity');
    
        return view('carthome.index', compact('groupedCartItems', 'totalPrice', 'totalItems'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function addToCart(Request $request)
    // {
    //     $productId = $request->input('product_id');
    //     $product = ProductsZzf::find($productId); // Mengambil produk dari products_zzfs berdasarkan ID
    //     $userId = auth()->id();

    //     if (!$product) {
    //         return redirect()->back()->with('error', 'Product not found.');
    //     }

    //     $quantityToAdd = $request->input('quantity', 1);
    //     $price = $product->price;

    //     // Mencari item di keranjang berdasarkan ID produk
    //     $cartItem = Carts::where('customer_id', $userId)
    //                     ->where('products_zzfs_id', $product->id)
    //                     ->first();

    //     if ($cartItem) {
    //         // Update item yang sudah ada di keranjang
    //         $cartItem->quantity += $quantityToAdd;
    //         $cartItem->total = $cartItem->quantity * $price;
    //         $cartItem->save();
    //     } else {
    //         // Menambahkan item baru ke keranjang
    //         Carts::create([
    //             'customer_id' => $userId,
    //             'products_zzfs_id' => $product->id,
    //             'products_sellers_id' => null, // Tidak ada seller untuk produk ini
    //             'quantity' => $quantityToAdd,
    //             'total' => $quantityToAdd * $price,
    //             'endtotal' => $quantityToAdd * $price,
    //         ]);
    //     }

    //     // Menghitung total akhir untuk keranjang saat ini
    //     $endtotal = Carts::where('customer_id', $userId)->sum('total');
    //     Carts::where('customer_id', $userId)->update(['endtotal' => $endtotal]);

    //     return redirect()->route('carthome.index')->with('success', 'Product added to cart successfully!');
    // }

    public function addToCartPurchase(Request $request)
    {
        $productSellersId = $request->input('product_id');
        $product = ProductSellers::find($productSellersId); // Mengambil produk dari product_sellers
        $userId = auth()->id();
    
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        $quantityToAdd = $request->input('quantity', 1);
        $price = $product->purchase_price;
    
        // Jika harga purchase_price adalah 0, berikan alert SweetAlert
        if ($price == 0) {
            return redirect()->back()->with('error', 'Barang tidak tersedia');
        }
    
        $cartItem = Carts::where('customer_id', $userId)
                        ->where('products_sellers_id', $product->id)
                        ->where('action', 'purchase')
                        ->first();
    
        if ($cartItem) {
            $cartItem->quantity += $quantityToAdd;
            $cartItem->total = $cartItem->quantity * $price;
            $cartItem->save();
        } else {
            Carts::create([
                'customer_id' => $userId,
                'products_sellers_id' => $product->id,
                'purchase_price' => $price,
                'quantity' => $quantityToAdd,
                'total' => $quantityToAdd * $price,
                'endtotal' => $quantityToAdd * $price,
                'status_cart' => 'in_cart',
                'action' => 'purchase',
            ]);
        }
    
        $endtotal = Carts::where('customer_id', $userId)->sum('total');
        Carts::where('customer_id', $userId)->update(['endtotal' => $endtotal]);
    
        return redirect()->route('carthome.index')->with('success', 'Product added to cart successfully!');
    }
    
    public function addToCartRent(Request $request)
    {
        $productSellersId = $request->input('product_id');
        $product = ProductSellers::find($productSellersId);
        $userId = auth()->id();
    
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        $quantityToAdd = $request->input('quantity', 1);
        $price = $product->rent_price;
    
        // Jika harga rent_price adalah 0, berikan alert SweetAlert
        if ($price == 0) {
            return redirect()->back()->with('error', 'Barang tidak tersedia');
        }
    
        $cartItem = Carts::where('customer_id', $userId)
                        ->where('products_sellers_id', $product->id)
                        ->where('action', 'rent')
                        ->first();
    
        if ($cartItem) {
            $cartItem->quantity += $quantityToAdd;
            $cartItem->total = $cartItem->quantity * $price;
            $cartItem->save();
        } else {
            Carts::create([
                'customer_id' => $userId,
                'products_sellers_id' => $product->id,
                'rent_price' => $price,
                'quantity' => $quantityToAdd,
                'total' => $quantityToAdd * $price,
                'endtotal' => $quantityToAdd * $price,
                'status_cart' => 'in_cart',
                'action' => 'rent',
            ]);
        }
    
        $endtotal = Carts::where('customer_id', $userId)->sum('total');
        Carts::where('customer_id', $userId)->update(['endtotal' => $endtotal]);
    
        return redirect()->route('carthome.index')->with('success', 'Product added to cart successfully!');
    }
    
// Tambahkan metode di CartHomeController
public function updateQuantity(Request $request, $id)
{
    $cartItem = Carts::findOrFail($id);
    $quantity = $request->input('quantity');

    // Pastikan quantity minimal 1
    $cartItem->quantity = max($quantity, 1);

    // Update total berdasarkan action
    if ($cartItem->action === 'purchase') {
        $cartItem->total = $cartItem->quantity * $cartItem->productSellers->purchase_price;
    } elseif ($cartItem->action === 'rent') {
        $cartItem->total = $cartItem->quantity * $cartItem->productSellers->rent_price;
    }

    $cartItem->save();

    return redirect()->route('carthome.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function hapuscart($id)
    {
        // Temukan dan hapus item wishlist berdasarkan ID
        $cartItem = Carts::findOrFail($id);

        // Pastikan item wishlist milik pengguna yang saat ini login
        if ($cartItem->customer_id === Auth::id()) {
            $cartItem->delete();
            return redirect()->route('carthome.index')->with('success', 'Product Successfully Deleted');
        } else {
            return redirect()->route('carthome.index')->with('error', 'You are not authorized to delete this item.');
        }
    }
}