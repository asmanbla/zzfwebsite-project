<?php

namespace App\Http\Controllers;
use App\Models\ProductsZzf;
use App\Models\ProductCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductZzfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("produkzzf.index", [
            'category' => ProductCategories::all(),
            'produkzzf' => ProductsZzf::with('category')->get(),
            'vwprodukzzf' => DB::table('vwprodukzzf')->get() // Query data dari view vwprodukzzf
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produkzzf.create', [
            'produkzzf' => ProductsZzf::all(),
            'prodcatzzf' => ProductCategories::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     ProductSellers::create($request->all());
    //     // return $request->input();
    //     return redirect('/produkzzf')->with('sukses', 'New kategori produk data with the name "' .$request -> name. '"    has been successfully saved!');
    // }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'product_category_id' => 'required|exists:product_categories,id', // Perbaikan nama tabel
            'product_name' => 'required|string|max:255|unique:products_zzfs,product_name',
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
            $data['image1_url'] = $request->file('image1_url')->store('produkzzf/Photos', 'public');
    
            // Simpan image2 jika ada
            if ($request->hasFile('image2_url')) {
                $data['image2_url'] = $request->file('image2_url')->store('produkzzf/Photos', 'public');
            }
    
            // Simpan image3 jika ada
            if ($request->hasFile('image3_url')) {
                $data['image3_url'] = $request->file('image3_url')->store('produkzzf/Photos', 'public');
            }
    
            // Simpan data produk ke database
            ProductsZzf::create($data);
    
            // Redirect ke halaman index dengan pesan sukses
            return redirect()->route('produkzzf.index')->with('sukses', 'New Product added!');
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
        $produkzzf = ProductsZzf::findOrFail($id);

        return view('produkzzf.edit', [
            'produkzzf' => $produkzzf,
            'category' => ProductCategories::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'product_name' => 'required|string|max:255',
        'product_category_id' => 'required|exists:product_categories,id',
        'price' => 'required|numeric|min:0',
        'stok_quantity' => 'nullable|numeric|min:0',
        'description' => 'required|string|max:500',
        'image1_url' => 'nullable|image|', // Adjust validation rules as needed
        'image2_url' => 'nullable|image|',
        'image3_url' => 'nullable|image|',
    ]);

    $produkzzf = ProductsZzf::findOrFail($id);
    $produkzzf->product_name = $request->input('product_name');
    $produkzzf->product_category_id = $request->input('product_category_id');
    $produkzzf->price = $request->input('price');
    $produkzzf->stok_quantity = $request->input('stok_quantity');
    $produkzzf->description = $request->input('description');

    for ($i = 1; $i <= 5; $i++) {
        if ($request->hasFile('image' . $i . '_url')) {
            // Store the uploaded image
            $imagePath = $request->file('image' . $i . '_url')->store('produkzzf/Photos');
            // Update the corresponding image_url property of the product
            $produkzzf->{'image' . $i . '_url'} = str_replace('public/', 'storage/', $imagePath);
        }
    }

    // Save the updated product
    $produkzzf->save();

    return redirect('/produkzzf')->with('sukses', 'Edit Product Saved!');

}
    /**
     * Remove the specified resource from storage.
     */
    public function hapusprodukzzf($id)
    {
        $produkzzf = ProductsZzf::find($id);
        if ($produkzzf) {
            $produkzzf->delete();
            return redirect('/produkzzf')->with('sukses', 'Product Deleted Successfully!');
        }
        return redirect('/produkzzf')->with('error', 'User not found!');
    }
}
