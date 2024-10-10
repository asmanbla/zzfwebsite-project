<?php

namespace App\Http\Controllers;
use App\Models\OrderDetailsSellers;
use Illuminate\Http\Request;

class OrdetailsellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('ordetailseller.index', [
            'ordetailseller' =>OrderDetailsSellers::all()
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
        $ordetailseller = OrderDetailsSellers::findOrFail($id);
    
        // Hapus data ordetail seller
        $ordetailseller->delete();
    
        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('ordetailseller.index')->with('success', 'ordetail Data Deleted Successfully');
    }
}
