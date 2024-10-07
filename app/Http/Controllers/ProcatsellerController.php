<?php

namespace App\Http\Controllers;
use App\Models\ProductCategoriesSeller;
use Illuminate\Http\Request;

class procatsellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("procatseller.index", [
            'procatseller' => ProductCategoriesSeller::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('procatseller.create', [
            'procatseller' => ProductCategoriesSeller::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProductCategoriesSeller::create($request->all());
        // return $request->input();
        return redirect('/procatseller')->with('success', 'New kategori produk data with the name "' .$request -> name. '"    has been successfully saved!');
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
        $procatseller = ProductCategoriesSeller::find($id);
         if (!$procatseller) return redirect()->route('procatseller.edit');
         return view('procatseller.edit', [
             'procatseller' => $procatseller
         ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $procatseller = ProductCategoriesSeller::find($id);
    $procatseller->kategori = $request->kategori;
    $procatseller->save();
    return redirect('/procatseller')->with('success', 'User Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusprocatseller($id)
    {
        $procatseller = ProductCategoriesSeller::find($id);
        if ($procatseller) {
            $procatseller->delete();
            return redirect('/procatseller')->with('success', 'The User Data Successfully Deleted!');
        }
        return redirect('/procatseller')->with('error', 'User not found!');
    }
}
