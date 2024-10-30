<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carts;
use App\Models\ProductsZzf;
use App\Models\ProductSellers;
use App\Models\Sellers;
use Illuminate\Support\Facades\Auth;

class CartHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data dari tabel cart berdasarkan customer_id
        $customerId = Auth::id(); // Mendapatkan ID customer yang login
        $cartItems = Carts::where('customer_id', $customerId)
                        ->with(['product', 'productSellers.seller']) // Ambil relasi produk dan seller
                        ->get();
    
                        $groupedCartItems = $cartItems->groupBy(function($item) {
                            
                            // Jika produk berasal dari tabel ProductSellers, gunakan nama dari relasi seller
                            if ($item->productSellers && $item->productSellers->seller) {
                                return $item->productSellers->seller->name;
                            }
                        
                            // Jika tidak ada relasi seller atau product, kelompokkan sebagai "No Seller"
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
            'action' => 'rent',
        ]);
    }

    $endtotal = Carts::where('customer_id', $userId)->sum('total');
    Carts::where('customer_id', $userId)->update(['endtotal' => $endtotal]);

    return redirect()->route('carthome.index')->with('success', 'Product added to cart successfully!');
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
            return redirect()->route('carthome.index')->with('success', 'Product Berhasil Dihapus dari carthome');
        } else {
            return redirect()->route('carthome.index')->with('error', 'You are not authorized to delete this item.');
        }
    }
}