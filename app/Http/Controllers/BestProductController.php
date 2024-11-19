<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BestProduct;

class BestProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('bestproduct.index', [
            'bestproduct' => BestProduct::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bestproduct.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image_url' => 'required|image|max:6000',
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:50000',
        ]);
    
        try {
            $data = $request->only([
                'image_url',
                'name',
                'description'
            ]);
    
            $data['image_url'] = $request->file('image_url')->store('bestproduct/Photos', 'public');

            // Simpan data produk ke database
            $bestproduct = BestProduct::create($data);
    
            return redirect()->route('bestproduct.index')->with('success', 'New Best Product Data added!');
        } catch (\Exception $e) {
            dd($e->getMessage());  // Menampilkan pesan error untuk debugging
        }
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
    public function hapusbestproduct(string $id)
    {
        $bestproduct = BestProduct::find($id);
        if ($bestproduct) {
            $bestproduct->delete();
            return redirect('/bestproduct')->with('success', 'Best Product Deleted Successfully!');
        }
        return redirect('/bestproduct')->with('error', 'Best Product not found!');
    }
}
