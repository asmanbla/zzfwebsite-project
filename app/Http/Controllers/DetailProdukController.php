<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductsZzf;
use App\Models\ProductSellers;
use App\Models\ProductReviews;
use App\Models\ProductReviewsSellers;
use App\Models\Carts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class DetailProdukController extends Controller
{
    public function show($id)
    {
        // Cek apakah user sudah login sebagai customer
        if (Auth::guard('customers')->check()) {
            $customerId = Auth::guard('customers')->id(); // Mendapatkan ID customer yang login
            $totalItems = Carts::where('customer_id', $customerId)->sum('quantity'); // Hitung jumlah item dalam cart
        } else {
            $totalItems = 0; // Jika tidak login, jumlah item 0
        }
    
        try {
            $product = ProductsZzf::findOrFail($id); // Mengambil produk berdasarkan ID
    
            // Mendapatkan URL gambar (jika ada)
            $imageUrls = [];
            for ($i = 1; $i <= 5; $i++) {
                if ($product->{'image'.$i.'_url'}) {
                    $imageUrls[] = asset('storage/' . $product->{'image'.$i.'_url'});
                }
            }
            
    
            // Kirim variabel $totalItems ke view
            return view('produkdetails.index', compact('product', 'imageUrls', 'totalItems'));
        } catch (ModelNotFoundException $e) {
            abort(404); // Jika produk tidak ditemukan
        }
    }
    
    public function showseller($id)
    {
        // Cek apakah user sudah login sebagai customer
        if (Auth::guard('customers')->check()) {
            $customerId = Auth::guard('customers')->id(); // Mendapatkan ID customer yang login
            $totalItems = Carts::where('customer_id', $customerId)->sum('quantity'); // Hitung jumlah item dalam cart
        } else {
            $totalItems = 0; // Jika tidak login, jumlah item 0
        }
    
        try {
            // Mengambil produk berdasarkan ID dari vwprodukseller
            $productseller = DB::table('vwprodukseller')->where('id', $id)->first(); 
    
            // Jika produk tidak ditemukan, lempar exception
            if (!$productseller) {
                abort(404); // Jika produk tidak ditemukan
            }
    
            // Mendapatkan URL gambar (jika ada)
            $imageUrls = [];
            for ($i = 1; $i <=3 ; $i++) {
                if ($productseller->{'image'.$i.'_url'}) {
                    $imageUrls[] = asset('storage/' . $productseller->{'image'.$i.'_url'});
                }
            }
    
            // Kirim variabel $totalItems ke view
            return view('produkdetailseller.index', compact('productseller', 'imageUrls', 'totalItems'));
            
        } catch (ModelNotFoundException $e) {
            abort(404); // Jika produk tidak ditemukan
        }
    }
    
}