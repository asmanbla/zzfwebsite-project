<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Customers;
use Illuminate\Support\Facades\DB;

class OrderZzfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('orderzzf.index', [
        'customers' => Customers::all(),
        'vworderzzf' => DB::table('vworderzzf')->get() // Mengambil data dari view
    ]);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orderzzf.create', [
            'order' => Orders::all(),
            'custname' => Customers::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Orders::create($request->all());
            // return $request->input();
            return redirect('/orderzzf')->with('success', 'New orders data with the id "' .$request -> id. '"    has been successfully saved!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
