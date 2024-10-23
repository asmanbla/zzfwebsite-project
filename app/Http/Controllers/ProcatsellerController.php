<?php

namespace App\Http\Controllers;

use App\Models\ProductCategoriesSeller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcatsellerController extends Controller
{
    public function index()
    {
        // Mengambil kategori produk milik seller yang sedang login
        $sellers_id = Auth::id(); // Mendapatkan ID seller yang login
        $procatseller = ProductCategoriesSeller::where('sellers_id', Auth::id())->get();

        return view("procatseller.index", [
            'procatseller' => $procatseller
        ]);
    }

    public function create()
    {
        return view('procatseller.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string|max:255',
        ]);
    
        // Mendapatkan id sellers dari user yang sedang login
        $seller_id = Auth::user()->id;
    
        // Menyimpan data ke database
        \App\Models\ProductCategoriesSeller::create([
            'kategori' => $request->kategori,
            'sellers_id' => $seller_id, // Menggunakan id sellers yang sedang login
        ]);
    
        return redirect()->route('procatseller.index')->with('success', 'Product Category created successfully!');
    }
    

    public function edit(string $id)
    {
        $procatseller = ProductCategoriesSeller::where('id', $id)
            ->where('sellers_id', Auth::id()) // Pastikan kategori produk milik seller yang sedang login
            ->first();

        if (!$procatseller) return redirect()->route('procatseller.index');
        return view('procatseller.edit', [
            'procatseller' => $procatseller
        ]);
    }

    public function update(Request $request, string $id)
    {
        $procatseller = ProductCategoriesSeller::where('id', $id)
            ->where('sellers_id', Auth::id()) // Pastikan hanya bisa mengupdate kategori milik seller yang sedang login
            ->first();

        if ($procatseller) {
            $procatseller->update($request->all());
            return redirect('/procatseller')->with('success', 'Product Category Updated Successfully');
        }
        return redirect('/procatseller')->with('error', 'Product Category Not Found');
    }

    public function hapusprocatseller($id)
    {
        $procatseller = ProductCategoriesSeller::where('id', $id)
            ->where('sellers_id', Auth::id()) // Pastikan hanya bisa menghapus kategori milik seller yang sedang login
            ->first();

        if ($procatseller) {
            $procatseller->delete();
            return redirect('/procatseller')->with('success', 'Product Category Deleted Successfully');
        }
        return redirect('/procatseller')->with('error', 'Product Category Not Found');
    }
}