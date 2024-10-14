<?php

namespace App\Http\Controllers;
use App\Models\Sellers;
use RealRashid\SweetAlert\Facades;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('seller.index', [
            'penjual' => Sellers::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seller.create', [
            'sellers' => Sellers::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sellers::create($request->all());
        // return $request->input();
        return redirect('/seller')->with('success', 'New Seller Data Created Successfully');


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
         $seller = Sellers::find($id);
         if (!$seller) return redirect()->route('seller.edit');
         return view('seller.edit', [
             'seller' => $seller
         ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Mengedit Data Seler
    $sellers = Sellers::find($id);
    $sellers->name = $request->name;
    $sellers->email = $request->email;
    if ($request->password) $sellers->password = bcrypt($request->password);
    $sellers->roles = $request->roles;
    $sellers->save();
    return redirect('/seller')->with('success', 'User Data Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusseller($id)
    {
        $seller = Sellers::find($id);
        if ($seller) {
            $seller->delete();
            return redirect('/seller')->with('success', 'The User Data Successfully Deleted!');
        }
        return redirect('/seller')->with('error', 'User not found!');
    }
}
