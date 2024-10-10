<?php

namespace App\Http\Controllers;
use App\Models\ProductReviewsSellers;
use App\Models\Customers;
use App\Models\ProductSellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdrevsellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vwproductreviewsellers = ProductReviewsSellers::with('name', 'product')->get(); // Menggunakan relasi 'name' dari model
    return view('prodrevseller.index', [
        'vwproductreviewsellers' => $vwproductreviewsellers,
        'customers' => Customers::all(),
        'produkseller' => ProductSellers::all()
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
    // Cari data order seller berdasarkan id
    $prodrevseller = ProductReviewsSellers::findOrFail($id);

    // Hapus data prodrev seller
    $prodrevseller->delete();

    // Redirect kembali ke halaman index dengan pesan sukses
    return redirect()->route('prodrevseller.index')->with('success', 'Order Data Deleted Successfully');
}
}
