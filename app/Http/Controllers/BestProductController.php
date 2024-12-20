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

    public function edit($id)
    {
        // Ambil data produk berdasarkan ID
        $bestproduct = BestProduct::findOrFail($id);

        // Kirim data ke view edit
        return view('bestproduct.edit', compact('bestproduct'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil data produk berdasarkan ID
        $bestproduct = BestProduct::findOrFail($id);

        // Update data produk
        $bestproduct->name = $request->input('name');
        $bestproduct->description = $request->input('description');

        // Cek apakah ada file gambar baru yang diunggah
        if ($request->hasFile('image_url')) {
            // Hapus gambar lama jika ada
            if ($bestproduct->image_url && file_exists(storage_path('app/public/' . $bestproduct->image_url))) {
                unlink(storage_path('app/public/' . $bestproduct->image_url));
            }

            // Simpan gambar baru
            $file = $request->file('image_url');
            $path = $file->store('images', 'public');
            $bestproduct->image_url = $path;
        }

        // Simpan perubahan ke database
        $bestproduct->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('bestproduct.index')->with('success', 'Product updated successfully.');
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
