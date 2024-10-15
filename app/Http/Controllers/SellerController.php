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
<<<<<<< HEAD
        Sellers::create($request->all());
        // return $request->input();
        return redirect('/seller')->with('sukses', 'Seller Berhasil Ditambahkan!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
=======
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:sellers,email',
            'password' => 'required|string|min:2',
            'roles' => 'required|string',
        ]);

        // Simpan data seller baru
        Sellers::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Enkripsi password
            'roles' => $request->roles,
        ]);

        return redirect('/seller')->with('success', 'New Seller Data Created Successfully');
>>>>>>> 465b29e0a0cdaf5f92983b9b663a434335666a94
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
<<<<<<< HEAD
        //Mengedit Data Seler
    $sellers = Sellers::find($id);
    $sellers->name = $request->name;
    $sellers->email = $request->email;
    if ($request->password) $sellers->password = bcrypt($request->password);
    $sellers->roles = $request->roles;
    $sellers->save();
    return redirect('/seller')->with('sukses', 'Edit Seller Berhasil Disimpan!');
=======
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:sellers,email,'.$id,
            'password' => 'nullable|string|min:8',
            'roles' => 'required|string',
        ]);
>>>>>>> 465b29e0a0cdaf5f92983b9b663a434335666a94

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
<<<<<<< HEAD
            return redirect('/seller')->with('sukses', 'Seller Berhasil Dihapus!');
=======
            return redirect('/seller')->with('success', 'The Seller Data Successfully Deleted!');
>>>>>>> 465b29e0a0cdaf5f92983b9b663a434335666a94
        }
        return redirect('/seller')->with('error', 'Seller not found!');
    }
}
