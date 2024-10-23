<?php

namespace App\Http\Controllers;
use App\Models\SewaDetailsSellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SewadetailsellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers_id = Auth::id(); // Mendapatkan ID seller yang login

        $sewadetailseller = SewaDetailsSellers::with('sewa') // Memuat relasi sewa
            ->whereHas('sewa', function ($query) use ($sellers_id) {
                $query->where('sellers_id', $sellers_id); // Memfilter berdasarkan sellers_id
            })
            ->get();

        return view('sewadetailseller.index', [
            'sewadetailseller' => $sewadetailseller
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
        $sewadetailseller = SewaDetailsSellers::where('id', $id)
            ->whereHas('sewa', function ($query) {
                $query->where('sellers_id', Auth::id()); // Pastikan hanya seller yang login yang bisa menghapus data ini
            })
            ->firstOrFail();

        // Hapus data sewa detail
        $sewadetailseller->delete();

        // Redirect kembali ke halaman index dengan pesan success
        return redirect()->route('sewadetailseller.index')->with('success', 'Rent Detail Deleted Successfully!!');
    }
}
