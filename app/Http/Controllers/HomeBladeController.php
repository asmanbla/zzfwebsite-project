<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsZzf;
use App\Models\ProductSellers;
use App\Models\Carts;
use Illuminate\Support\Facades\Auth;

class HomeBladeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $products = ProductsZzf::all(); // Mengambil semua produk dari model ProductsZzf
    $productsseller = ProductSellers::all(); // Mengambil semua produk dari model ProductSellers

    // Hitung jumlah item dalam keranjang untuk pengguna yang sedang login
    $customerId = Auth::id(); // Mendapatkan ID customer yang login
    $totalItems = Carts::where('customer_id', $customerId)->sum('quantity');

    return view('welcome', [
        'products' => $products,
        'productsseller' => $productsseller,
        'totalItems' => $totalItems, // Mengirimkan jumlah item ke view
    ]);
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
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
