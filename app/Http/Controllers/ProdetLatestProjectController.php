<?php

namespace App\Http\Controllers;
use App\Models\LatestProject;

use Illuminate\Http\Request;

class ProdetLatestProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showproduct($id)
    {
        // Cek apakah user sudah login sebagai customer
        // if (Auth::guard('customers')->check()) {
        //     $customerId = Auth::guard('customers')->id(); // Mendapatkan ID customer yang login
        //     $totalItems = Carts::where('customer_id', $customerId)->sum('quantity'); // Hitung jumlah item dalam cart
        // } else {
        //     $totalItems = 0; // Jika tidak login, jumlah item 0
        // }
    
        try {
            // Mengambil produk berdasarkan ID dari model LatestProject
            $latestproject = LatestProject::findOrFail($id);
    
            // Mendapatkan URL gambar (jika ada)
            $imageUrls = [];
            for ($i = 1; $i <= 3; $i++) {
                $imageField = "image{$i}_url";
                if (!empty($latestproject->$imageField)) {
                    $imageUrls[] = asset('storage/' . $latestproject->$imageField);
                }
            }
    
            // Kirim variabel $totalItems (jika digunakan) ke view
            return view('prodetlatest.index', compact('latestproject', 'imageUrls'));
    
        } catch (ModelNotFoundException $e) {
            abort(404); // Jika produk tidak ditemukan
        }
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
