<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carts;
use App\Models\ProductsZzf;
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
                        ->with('product') // Mengambil relasi produk
                        ->get();

        // Hitung total harga belanjaan berdasarkan produk yang dipilih
        $totalPrice = $cartItems->sum(function ($cartItem) {
            // Pastikan produk ada sebelum mengakses price
            if ($cartItem->product) { // Menggunakan relasi 'product'
                return $cartItem->product->price * $cartItem->quantity; // Menghitung total harga
            }
            return 0; // Jika produk tidak ditemukan, kembalikan 0
        });

        // Hitung jumlah item dalam keranjang
         $totalItems = $cartItems->sum('quantity');

        // Tampilkan halaman cart dengan data produk yang sesuai dan total harga belanjaan
        return view('carthome.index', compact('cartItems', 'totalPrice'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $product = ProductsZzf::find($productId); // Mengambil produk berdasarkan ID
        $userId = auth()->id();
    
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        $quantityToAdd = $request->input('quantity', 1);
        $price = $product->price;
    
        // Mencari item di keranjang berdasarkan ID produk
        $cartItem = Carts::where('customer_id', $userId)
                        ->where('products_zzfs_id', $product->id)
                        ->first();
    
        if ($cartItem) {
            // Update item yang sudah ada di keranjang
            $cartItem->quantity += $quantityToAdd;
            $cartItem->total = $cartItem->quantity * $price;
            $cartItem->save();
        } else {
            // Menambahkan item baru ke keranjang
            Carts::create([
                'customer_id' => $userId,
                'products_zzfs_id' => $product->id, // Menyimpan ID produk
                'products_sellers_id' => null, // Atur ke null jika tidak ada seller
                'quantity' => $quantityToAdd,
                'total' => $quantityToAdd * $price,
                'endtotal' => $quantityToAdd * $price,
            ]);
        }
    
        // Menghitung total akhir untuk keranjang saat ini
        $endtotal = Carts::where('customer_id', $userId)->sum('total');
        Carts::where('customer_id', $userId)->update(['endtotal' => $endtotal]);
    
        return redirect()->route('carthome.index')->with('success', 'Product added to cart successfully!');
    }
    
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'product_id' => 'required|exists:products_zzfs,id', // Sesuaikan dengan nama tabel produk
            'quantity' => 'required|integer|min:1',
        ]);
    
        $cartItem = new Carts();
        $cartItem->customer_id = Auth::id(); // ID pengguna yang sedang login
        $cartItem->products_zzfs_id = $request->product_id; // ID produk
        $cartItem->quantity = $request->quantity;
        $cartItem->total = $request->total;
        $cartItem->endtotal = $request->endtotal;
        // Simpan data cart
        $cartItem->save();
    
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }
    
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cartItem = Carts::findOrFail($id);
        $cartItem->delete();
    
        return redirect()->back()->with('success', 'Item berhasil dihapus dari keranjang!');
    }
    
}
