<?php

namespace App\Http\Controllers;
use App\Models\ProductSellers;
use App\Models\ProductCategoriesSeller;
use Illuminate\Http\Request;

class produksellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("produkseller.index", [
            'produkseller' => ProductSellers::all()
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
        $request->validate([
            'product_category_id' => 'required|exists:product_categories,id',
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stok_quantity' => 'nullable|numeric|min:0',
            'description' => 'required|string|max:500',
            'image1_url' => 'required|image|max:2048',
            'image2_url' => 'nullable|image|max:2048',
            'image3_url' => 'nullable|image|max:2048'
        ]);
        
        $produkseller = DB::table('product_sellers')->where('product_name', '=', $request->product_name)->value('product_name');
        if($produkseller) {
            return view('produkseller.create', [
                'status' => 'Duplikasi', 
                'procatseller' => ProductCategoriesSeller::all(),
                'product_category_id' => $request->product_category_id,
                'product_name' => $request->product_name, 
                'description' => $request->description
            ]);
        }else {
            $data = $request->only([
                'product_category_id','product_name', 'stok_quantity','price', 'description'
            ]); 
            $data['stok_quantity'] = $request->stok_quantity;
            $data['image1_url'] = $request->file('image1_url')->store('Products/Photos');

            if($request ->hasFile('image2_url')) {
                $data['image2_url'] = $request->file('image2_url')->store('Products/Photos');
            }
            if($request ->hasFile('image3_url')) {
                $data['image3_url'] = $request->file('image3_url')->store('Products/Photos'); 
            }
            ProductSellers::create($data);
            return view('produkseller.index',[
                    'status' => 'simpan',
                    'pesan' => 'The new Product data with the name" ' .$request->product_name.' "has been sucesfully saved',
                    'produkseller' => DB::table('product_sellers')->get()
                ]);
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
        $produkseller = ProductSellers::find($id);
         if (!$produkseller) return redirect()->route('produkseller.edit');
         return view('produkseller.edit', [
             'produkseller' => $produkseller
         ]); 
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_category_id' => 'required|exists:product_categories,id',
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stok_quantity' => 'nullable|numeric|min:0',
            'description' => 'required|string|max:500',
            'image1_url' => 'nullable|image|', // Adjust validation rules as needed
            'image2_url' => 'nullable|image|',
            'image3_url' => 'nullable|image|',
            'image4_url' => 'nullable|image|',
            'image5_url' => 'nullable|image|',
        ]);
    
        $produkseller =ProductSellers::findOrFail($id);
        $produkseller->product_category_id = $request->input('product_category_id');
        $produkseller->product_name = $request->input('product_name');
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
    
        return redirect('/produkseller')->with('success', 'Product Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusprodukseller($id)
    {
        $produkseller = ProductSellers::find($id);
        if ($produkseller) {
            $produkseller->delete();
            return redirect('/produkseller')->with('success', 'The User Data Successfully Deleted!');
        }
        return redirect('/produkseller')->with('error', 'User not found!');
    }
}
