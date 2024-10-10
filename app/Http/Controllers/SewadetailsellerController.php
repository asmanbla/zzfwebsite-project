<?php

namespace App\Http\Controllers;
use App\Models\SewaDetailsSellers;
use Illuminate\Http\Request;

class SewadetailsellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('sewadetailseller.index', [
            'sewadetailseller' =>SewaDetailsSellers::all()
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
        $sewadetailseller = SewaDetailsSellers::findOrFail($id);
    
        // Hapus data ordetail seller
        $sewadetailseller->delete();
    
        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('sewadetailseller.index')->with('success', 'sewa detail Data Deleted Successfully');
    }
}
