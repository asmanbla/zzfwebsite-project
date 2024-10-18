<?php

namespace App\Http\Controllers;

use App\Models\Sellers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert; // Pastikan SweetAlert diimpor dengan benar

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('seller.index', [
            'penjual' => Sellers::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seller.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sellers::create($request->all());
        // return $request->input();
        return redirect('/seller')->with('success', 'New Seller Added!');


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
        // Menampilkan Form Edit
        $seller = Sellers::find($id);
        if (!$seller) {
            return redirect('/seller')->with('error', 'Seller not found!');
        }
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
    if ($request->password) {
        $sellers->password = $request->password; // Menyimpan password apa adanya
    }
    $sellers->roles = $request->roles;
    $sellers->save();
    return redirect('/seller')->with('success', 'Edit Seller Saved Successfully!!!');

        // Mengedit data seller
        $sellers = Sellers::find($id);
        if (!$sellers) {
            return redirect('/seller')->with('error', 'Seller not found!');
        }

        $sellers->name = $request->name;
        $sellers->email = $request->email;
        if ($request->password) {
            $sellers->password = bcrypt($request->password); // Enkripsi password baru jika ada
        }
        $sellers->roles = $request->roles;
        $sellers->save();

        return redirect('/seller')->with('success', 'Seller Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusseller($id)
    {
        $seller = Sellers::find($id);
        if ($seller) {
            $seller->delete();
            return redirect('/seller')->with('success', 'Seller Deleted Successfully!!');
        }
        return redirect('/seller')->with('error', 'Seller not found!');
    }
}
