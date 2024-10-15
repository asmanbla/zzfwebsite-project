<?php

namespace App\Http\Controllers;
use App\Models\ProductCategories;

use Illuminate\Http\Request;

class ProductCategoriZzfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('prodcatzzf.index', [
            'prodcat' => ProductCategories::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prodcatzzf.create', [
            'category' => ProductCategories::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProductCategories::create($request->all());
        // return $request->input();
        return redirect('/prodcatzzf')->with('sukses', 'Produk Kategori Baru Berhasil Ditambahkan!');
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
         //Menampilkan Form Edit
         $category = ProductCategories::find($id);
         if (!$category) return redirect()->route('prodcatzzf.edit');
         return view('prodcatzzf.edit', [
             'category' => $category
         ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            //Mengedit Data User
        $category = ProductCategories::find($id);
        $category->kategori = $request->kategori;
        $category->save();
        return redirect('/prodcatzzf')->with('sukses', 'Edit Produk Kategori Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusprodcatzzf(string $id)
    {
        $category = ProductCategories::find($id);
        if ($category) {
            $category->delete();
            return redirect('/prodcatzzf')->with('sukses', 'Produk Kategori Berhasil Dihapus!');
        }
        return redirect('/prodcatzzf')->with('error', 'User not found!');
    }
}
