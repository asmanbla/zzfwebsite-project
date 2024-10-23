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
    $products = ProductsZzf::all(); // Mengambil semua produk
    $productsseller = ProductSellers::all(); // Mengambil semua produk dari seller

    // Cek apakah user sudah login sebagai customer
    if (Auth::guard('customers')->check()) {
        $customerId = Auth::guard('customers')->id(); // Mendapatkan ID customer yang login
        $totalItems = Carts::where('customer_id', $customerId)->sum('quantity'); // Hitung jumlah item dalam cart
    } else {
        $totalItems = 0; // Jika tidak login, jumlah item 0
    }

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
