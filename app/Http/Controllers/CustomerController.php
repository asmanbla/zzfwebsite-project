<?php

namespace App\Http\Controllers;
use App\Models\Customers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('customer.index', [
            'customers' => Customers::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create', [
            'pembeli' => Customers::all()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Customers::create($request->all());
        // return $request->input();
        return redirect('/customer')->with('sukses', 'Customer Baru Berhasil Ditambahkan!');
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
        // Cari customer berdasarkan ID
        $customer = Customers::find($id);
        
        // Jika customer tidak ditemukan, redirect kembali ke index dengan pesan error
        if (!$customer) {
            return redirect()->route('customer.index')->with('error', 'Customer not found.');
        }
    
        // Tampilkan form edit dengan data customer yang ditemukan
        return view('customer.edit', [
            'customer' => $customer
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Mengedit Data Customer
        $customers = Customers::find($id);
        $customers->name = $request->name;
        $customers->email = $request->email;
        if ($request->password) $customers->password = bcrypt($request->password);
        $customers->phone = $request->phone;
        $customers->address1 = $request->address1;
        $customers->address2 = $request->address2;
        $customers->save();
        return redirect('/customer')->with('sukses', 'Edit Customer Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapuscust(string $id)
    {
        $customer = Customers::find($id);
        if ($customer) {
            $customer->delete();
            return redirect('/customer')->with('sukses', 'Customer Berhasil Dihapus!');
        }
        return redirect('/customer')->with('error', 'User not found!');
    }
}
