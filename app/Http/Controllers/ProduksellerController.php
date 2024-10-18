<?php

namespace App\Http\Controllers;
use App\Models\ProductSellers;
use App\Models\ProductCategoriesSeller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produksellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("produkseller.index", [
            'procatseller' => ProductCategoriesSeller::all(),
            'produkseller' => ProductSellers::with('category')->get(),
            'vwprodukseller' => DB::table('vwprodukseller')->get() // Query data dari view vwprodukseller
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produkseller.create', [
            'produkseller' => ProductSellers::all(),
            'procatseller' => ProductCategoriesSeller::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     ProductSellers::create($request->all());
    //     // return $request->input();
    //     return redirect('/produkseller')->with('success', 'New kategori produk data with the name "' .$request -> name. '"    has been successfully saved!');
    // }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'product_category_id' => 'required|exists:product_categories_sellers,id', // Perbaikan nama tabel
            'product_name' => 'required|string|max:255|unique:product_sellers,product_name',
            'price' => 'required|numeric|min:0',
            'stok_quantity' => 'nullable|numeric|min:0',
            'description' => 'required|string|max:500',
            'image1_url' => 'required|image|max:6000', // Pastikan file gambar tidak lebih dari 6MB
            'image2_url' => 'nullable|image|max:6000',
            'image3_url' => 'nullable|image|max:6000'
        ]);
    
        // Upload image and store data
        try {
            // Hanya ambil field yang dibutuhkan
            $data = $request->only([
                'product_category_id',
                'product_name',
                'stok_quantity',
                'price',
                'description'
            ]);
    
            // Simpan image1
            $data['image1_url'] = $request->file('image1_url')->store('produkseller/Photos', 'public');
    
            // Simpan image2 jika ada
            if ($request->hasFile('image2_url')) {
                $data['image2_url'] = $request->file('image2_url')->store('produkseller/Photos', 'public');
            }
    
            // Simpan image3 jika ada
            if ($request->hasFile('image3_url')) {
                $data['image3_url'] = $request->file('image3_url')->store('produkseller/Photos', 'public');
            }
    
            // Simpan data produk ke database
            ProductSellers::create($data);
    
            // Redirect ke halaman index dengan pesan success
            return redirect()->route('produkseller.index')->with('success', 'New Product Successfully Added!');
        } catch (\Exception $e) {
            // Tangani error jika terjadi kesalahan
            return redirect()->back()->withErrors(['error' => 'Failed to save product: ' . $e->getMessage()])->withInput();
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
            $produkseller = ProductSellers::findOrFail($id);
    
            return view('produkseller.edit', [
                'produkseller' => $produkseller,
                'procatseller' => ProductCategoriesSeller::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_category_id' => 'required|exists:product_categories_sellers,id', // Perbaikan nama tabel,
            'price' => 'required|numeric|min:0',
            'stok_quantity' => 'nullable|numeric|min:0',
            'description' => 'required|string|max:500',
            'image1_url' => 'nullable|image|', // Adjust validation rules as needed
            'image2_url' => 'nullable|image|',
            'image3_url' => 'nullable|image|',
        ]);
    
        $produkseller = ProductSellers::findOrFail($id);
        $produkseller->product_name = $request->input('product_name');
        $produkseller->product_category_id = $request->input('product_category_id');
        $produkseller->price = $request->input('price');
        $produkseller->stok_quantity = $request->input('stok_quantity');
        $produkseller->description = $request->input('description');
    
        for ($i = 1; $i <= 5; $i++) {
            if ($request->hasFile('image' . $i . '_url')) {
                // Store the uploaded image
                $imagePath = $request->file('image' . $i . '_url')->store('produkseller/Photos');
                // Update the corresponding image_url property of the product
                $produkseller->{'image' . $i . '_url'} = str_replace('public/', 'storage/', $imagePath);
            }
        }
    
        // Save the updated product
        $produkseller->save();
    
        return redirect('/produkseller')->with('success', 'Edit Product Saved Successfully!!!');
    }
    
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function hapusprodukseller($id)
    {
        $produkseller = ProductSellers::find($id);
        if ($produkseller) {
            $produkseller->delete();
            return redirect('/produkseller')->with('success', 'Product Deleted Successfully!!');
        }
        return redirect('/produkseller')->with('error', 'User not found!');
    }
}
