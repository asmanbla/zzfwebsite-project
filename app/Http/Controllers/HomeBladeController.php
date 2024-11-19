<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsZzf;
use App\Models\ProductSellers;
use App\Models\ProductCategoriesSeller;
use App\Models\Client;
use App\Models\Carts;
use App\Models\LatestProject;
use App\Models\BestProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeBladeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     
     {
        $locale = session()->get('locale', config('app.locale'));
    \Log::info('Locale yang didapat di controller: ' . $locale);
         // Query untuk produk dengan tipe 'purchase' dan 'rent'
         $productsForSale = DB::table('vwprodukseller')->where('type', 'purchase')->get();
         $productsForRent = DB::table('vwprodukseller')->where('type', 'rent')->get();
         $productsForAll = DB::table('vwprodukseller')->where('type', 'rent_and_purchase')->get();
     
         // Query untuk mengambil semua kategori
         $categories = ProductCategoriesSeller::all();
         $bestproduct = BestProduct::all();
         $latestproject = LatestProject::all();
     
         // Cek apakah user sudah login sebagai customer
         if (Auth::guard('customers')->check()) {
             $customerId = Auth::guard('customers')->id();
             $totalItems = Carts::where('customer_id', $customerId)->sum('quantity');
         } else {
             $totalItems = 0;
         }
     
         // Query untuk mengambil semua client
         $clients = Client::all();
     
         return view('welcome', [
             'productsForSale' => $productsForSale,
             'productsForRent' => $productsForRent,
             'productsForAll' => $productsForAll,
             'totalItems' => $totalItems,
             'categories' => $categories,
             'clients' => $clients, 
             'bestproduct' => $bestproduct, 
             'latestproject' => $latestproject, 
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

    public function search(Request $request)
{
    $query = $request->input('search');
    $productsForSale = DB::table('vwprodukseller')
        ->where('type', 'purchase')
        ->where(function($q) use ($query) {
            $q->where('product_name', 'LIKE', '%' . $query . '%')
              ->orWhere('specification', 'LIKE', '%' . $query . '%');
        })
        ->get();

    $productsForRent = DB::table('vwprodukseller')
        ->where('type', 'rent')
        ->where(function($q) use ($query) {
            $q->where('product_name', 'LIKE', '%' . $query . '%')
              ->orWhere('specification', 'LIKE', '%' . $query . '%');
        })
        ->get();

    $productsForAll = DB::table('vwprodukseller')
        ->where('type', 'rent_and_purchase')
        ->where(function($q) use ($query) {
            $q->where('product_name', 'LIKE', '%' . $query . '%')
              ->orWhere('specification', 'LIKE', '%' . $query . '%');
        })
        ->get();

    return view('welcome', [
        'productsForSale' => $productsForSale,
        'productsForRent' => $productsForRent,
        'productsForAll' => $productsForAll,
        'totalItems' => 0,  // atau hitung jika user login
    ]);
    
}

public function product_search(Request $request)
{
    $search_text = $request->search;
    $keywords = explode(' ', $search_text); // Memisahkan setiap kata dalam pencarian
    $productQuery = ProductSellers::query();

    foreach ($keywords as $keyword) {
        $productQuery->where(function($query) use ($keyword) {
            $query->where('product_name', 'LIKE', '%' . $keyword . '%')
                  ->orWhere('specification', 'LIKE', '%' . $keyword . '%');
        });
    }

    // Ambil produk yang dicari
    $products = $productQuery->get();

    // Untuk keperluan tampilan, kita bisa memisahkan produk yang dijual dan disewa, jika perlu
    $productsForSale = $products->where('type', 'purchase'); // Misalkan ada kolom 'type' di database
    $productsForRent = $products->where('type', 'rent');
    $productsForAll = $products->where('type', 'rent_and_purchase');

    return view('welcome', compact('products', 'productsForSale', 'productsForRent', 'productsForAll'));
}

public function product_search_purchase(Request $request, $category)
{
    $search_text = $request->search;
    $keywords = explode(' ', $search_text); // Memisahkan setiap kata dalam pencarian
    $productQuery = ProductSellers::query();

    foreach ($keywords as $keyword) {
        $productQuery->where(function($query) use ($keyword) {
            $query->where('product_name', 'LIKE', '%' . $keyword . '%')
                  ->orWhere('specification', 'LIKE', '%' . $keyword . '%');
        });
    }

    // Filter berdasarkan tipe 'purchase' dan kategori tertentu
    $productQuery->where('type', 'purchase')
                 ->whereHas('category', function($query) use ($category) {
                    $query->where('kategori', $category);
                 });

    // Ambil produk yang dicari
    $productsForSale = $productQuery->get();

    return view('prodviewpurchase.index', compact('productsForSale'));
}

public function product_search_rent(Request $request, $category)
{
    $search_text = $request->search;
    $keywords = explode(' ', $search_text); // Memisahkan setiap kata dalam pencarian
    $productQuery = ProductSellers::query();

    foreach ($keywords as $keyword) {
        $productQuery->where(function($query) use ($keyword) {
            $query->where('product_name', 'LIKE', '%' . $keyword . '%')
                  ->orWhere('specification', 'LIKE', '%' . $keyword . '%');
        });
    }

    // Filter berdasarkan tipe 'rent' dan kategori tertentu
    $productQuery->where('type', 'rent')
                 ->whereHas('category', function($query) use ($category) {
                    $query->where('kategori', $category);
                 });

    // Ambil produk yang dicari
    $productsForRent = $productQuery->get();

    return view('prodviewrent.index', compact('productsForRent'));
}


public function product_search_all(Request $request)
{
    $search_text = $request->search;
    $keywords = explode(' ', $search_text); // Memisahkan setiap kata dalam pencarian
    $productQuery = ProductSellers::query();

    foreach ($keywords as $keyword) {
        $productQuery->where(function($query) use ($keyword) {
            $query->where('product_name', 'LIKE', '%' . $keyword . '%')
                  ->orWhere('specification', 'LIKE', '%' . $keyword . '%');
        });
    }

    // Ambil produk yang dicari
    $products = $productQuery->get();

    $productsForAll = $products->where('type', 'rent_and_purchase'); 

    return view('prodviewall.index', compact('products', 'productsForAll'));
}

public function product_search_catalog (Request $request)
{
    $search_text = $request->search;
    $keywords = explode(' ', $search_text); // Memisahkan setiap kata dalam pencarian
    $productQuery = ProductSellers::query();

    foreach ($keywords as $keyword) {
        $productQuery->where(function($query) use ($keyword) {
            $query->where('product_name', 'LIKE', '%' . $keyword . '%')
                  ->orWhere('specification', 'LIKE', '%' . $keyword . '%');
        });
    }

    // Ambil produk yang dicari
    $products = $productQuery->get();

    $produkall = $products->where('type'); // 

    return view('catalog.index', compact('products', 'produkall'));
}



}