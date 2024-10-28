<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsZzf;
use App\Models\ProductSellers;
use App\Models\Carts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeBladeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
         // Query untuk produk dengan tipe 'purchase' dan 'rent'
         $productsForSale = DB::table('vwprodukseller')->where('type', 'purchase')->get();
         $productsForRent = DB::table('vwprodukseller')->where('type', 'rent')->get();
         $productsForAll = DB::table('vwprodukseller')->where('type', 'rent_and_purchase')->get();
     
         // Cek apakah user sudah login sebagai customer
         if (Auth::guard('customers')->check()) {
             $customerId = Auth::guard('customers')->id();
             $totalItems = Carts::where('customer_id', $customerId)->sum('quantity');
         } else {
             $totalItems = 0;
         }
     
         return view('welcome', [
             'productsForSale' => $productsForSale,
             'productsForRent' => $productsForRent,
             'productsForAll' => $productsForAll,
             'totalItems' => $totalItems,
         ]);
     }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
