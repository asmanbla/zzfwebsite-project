<?php

namespace App\Http\Controllers;
use App\Models\OrderDetailsSellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdetailsellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers_id = Auth::id(); // Mendapatkan ID seller yang login

        // Mengambil data order detail yang hanya dimiliki oleh seller yang sedang login
        return view('ordetailseller.index', [
            'ordetailseller' => OrderDetailsSellers::where('sellers_id', $sellers_id)->get(),
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
        // Cari data order detail berdasarkan id dan sellers_id
        $ordetailseller = OrderDetailsSellers::where('id', $id)
            ->where('sellers_id', Auth::id()) // Pastikan hanya seller yang memiliki order detail yang bisa menghapusnya
            ->firstOrFail();
    
        // Hapus data order detail
        $ordetailseller->delete();
    
        return redirect()->route('ordetailseller.index')->with('success', 'Order Detail Deleted Successfully!');
    }
}
