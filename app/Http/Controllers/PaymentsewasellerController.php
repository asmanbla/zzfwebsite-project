<?php

namespace App\Http\Controllers;
use App\Models\PaymentsSellers;
use Illuminate\Http\Request;

class PaymentsewasellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("paymentsewaseller.index", [
            'paymentsewaseller' => PaymentsSellers::all()
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
        // Cari data ordetail seller berdasarkan id
        $paymentsewaseller = SewaDetailsSellers::findOrFail($id);
    
        // Hapus data ordetail seller
        $paymentsewaseller->delete();
    
        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('paymentsewaseller.index')->with('success', 'sewa detail Data Deleted Successfully');
    }
}
