<?php

namespace App\Http\Controllers;

use App\Models\ProductSellers;
use App\Models\ProductCategoriesSeller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\LatestProject; 
use Carbon\Carbon; 


class produksellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $sellers_id = Auth::id(); // Mendapatkan ID seller yang login

    return view("produkseller.index", [
        // Hanya menampilkan kategori produk yang dimiliki oleh seller yang sedang login
        'procatseller' => ProductCategoriesSeller::where('sellers_id', $sellers_id)->get(),
        // Menampilkan produk yang dimiliki oleh seller yang sedang login
        'produkseller' => ProductSellers::with('category')->where('sellers_id', $sellers_id)->get(),
        'vwprodukseller' => DB::table('vwprodukseller')->where('sellers_id', $sellers_id)->get() // Query data dari view vwprodukseller untuk seller yang login
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $procatseller = ProductCategoriesSeller::where('sellers_id', Auth::id())->get();
    
        return view('produkseller.create', compact('procatseller'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'product_category_id' => 'required|exists:product_categories_sellers,id',
            'product_name' => 'required|string|max:255',
            'specification' => 'required|string|max:255',
            'type' => 'required|in:rent,purchase,rent_and_purchase',
            'purchase_price' => 'nullable|numeric|min:0',
            'rent_price' => 'nullable|numeric|min:0',
            'stok_quantity' => 'nullable|numeric|min:0',
            'description' => 'required|string|max:500',
            'image1_url' => 'required|image|max:6000',
            'image2_url' => 'nullable|image|max:6000',
            'image3_url' => 'nullable|image|max:6000'
        ]);
    
        try {
            // Simpan data produk ke tabel produk_sellers
            $data = $request->only([
                'product_category_id',
                'product_name',
                'specification',
                'stok_quantity',
                'type',
                'purchase_price',
                'rent_price',
                'description'
            ]);
    
            $data['sellers_id'] = Auth::id(); // Tambahkan sellers_id
            $data['image1_url'] = $request->file('image1_url')->store('produkseller/Photos', 'public'); // Simpan gambar utama
    
            if ($request->hasFile('image2_url')) {
                $data['image2_url'] = $request->file('image2_url')->store('produkseller/Photos', 'public');
            }
    
            if ($request->hasFile('image3_url')) {
                $data['image3_url'] = $request->file('image3_url')->store('produkseller/Photos', 'public');
            }
    
            // Simpan ke tabel produk_sellers
            $produk = ProductSellers::create($data);
    
            // Simpan data ke tabel latest_projects
            LatestProject::create([
                'image_url' => $data['image1_url'], // Menggunakan gambar pertama produk
                'project_name' => $request->input('product_name'), // Nama produk
                'description' => $request->input('description'), // Deskripsi produk
                'expires_at' => Carbon::now()->addDays(30), // Masa berlaku 30 hari
            ]);
    
            // Redirect dengan pesan sukses
            return redirect()->route('produkseller.index')->with('success', 'New Product Successfully Added!');
        } catch (\Exception $e) {
            // Tangani error
            return redirect()->back()->withErrors(['error' => 'Failed to save product: ' . $e->getMessage()])->withInput();
        }
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produkseller = ProductSellers::where('id', $id)->where('sellers_id', Auth::id())->firstOrFail();
        
        return view('produkseller.edit', [
            'produkseller' => $produkseller,
            'procatseller' => ProductCategoriesSeller::where('sellers_id', Auth::id())->get(), // Ganti titik koma dengan koma
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
    $request->validate([
        'product_name' => 'required|string|max:255',
        'specification' => 'required|string|max:255',
        'product_category_id' => 'required|exists:product_categories_sellers,id',
        'type' => 'required|in:rent,purchase,rent_and_purchase',
        'purchase_price' => 'nullable|numeric|min:0',
        'rent_price' => 'nullable|numeric|min:0',
        'stok_quantity' => 'nullable|numeric|min:0',
        'description' => 'required|string|max:500',
        'image1_url' => 'nullable|image|max:6000',
        'image2_url' => 'nullable|image|max:6000',
        'image3_url' => 'nullable|image|max:6000',
    ]);

    // Validasi tambahan untuk harga
    if (($request->type == 'rent' && is_null($request->rent_price)) ||
        ($request->type == 'purchase' && is_null($request->purchase_price)) ||
        ($request->type == 'rent_and_purchase' && is_null($request->rent_price) && is_null($request->purchase_price))) {
        return back()->withErrors(['price' => 'Either rent price or purchase price must be provided based on the selected type.'])->withInput();
    }

    // Ambil produk berdasarkan ID
    $produkseller = ProductSellers::where('id', $id)->where('sellers_id', Auth::id())->firstOrFail();

    // Update data produk
    $produkseller->product_name = $request->input('product_name');
    $produkseller->specification = $request->input('specification');
    $produkseller->product_category_id = $request->input('product_category_id');
    $produkseller->type = $request->input('type');
    $produkseller->purchase_price = $request->input('purchase_price');
    $produkseller->rent_price = $request->input('rent_price');
    $produkseller->stok_quantity = $request->input('stok_quantity');
    $produkseller->description = $request->input('description');

    // Update gambar jika diunggah
    for ($i = 1; $i <= 3; $i++) {
        if ($request->hasFile('image' . $i . '_url')) {
            // Simpan gambar
            $imagePath = $request->file('image' . $i . '_url')->store('produkseller/Photos', 'public');
            // Simpan path gambar ke database
            $produkseller->{'image' . $i . '_url'} = $imagePath;
        }
    }

    // Simpan perubahan
    $produkseller->save();

    // Redirect dengan pesan sukses
    return redirect('/produkseller')->with('success', 'Edit Product Saved Successfully!!!');
}
    
    /**
     * Remove the specified resource from storage.
     */
    public function hapusprodukseller($id)
    {
        $produkseller = ProductSellers::where('id', $id)->where('sellers_id', Auth::id())->first();
        if ($produkseller) {
            $produkseller->delete();
            return redirect('/produkseller')->with('success', 'Product Deleted Successfully!!');
        }
        return redirect('/produkseller')->with('error', 'Product not found or you do not have permission to delete this product!');
    }
}
