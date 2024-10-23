<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductsZzf;
use App\Models\ProductSellers;
use App\Models\ProductReviews;
use App\Models\ProductReviewsSellers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DetailProdukController extends Controller
{
    public function show($id)
    {
        try {
            $product = ProductsZzf::findOrFail($id); // Mengambil produk berdasarkan ID

            // Mendapatkan URL gambar (jika ada)
            $imageUrls = [];
            for ($i = 1; $i <= 5; $i++) {
                if ($product->{'image'.$i.'_url'}) {
                    $imageUrls[] = asset('storage/' . $product->{'image'.$i.'_url'});
                }
            }

            return view('produkdetails.index', compact('product', 'imageUrls'));
        } catch (ModelNotFoundException $e) {
            abort(404); // Jika produk tidak ditemukan
        }
    }


    public function showseller($id)
    {
        try {
            $productseller = ProductSellers::findOrFail($id); // Mengambil produk berdasarkan ID
    
            // Mendapatkan URL gambar (jika ada)
            $imageUrls = [];
            for ($i = 1; $i <= 5; $i++) {
                if ($productseller->{'image'.$i.'_url'}) {
                    $imageUrls[] = asset('storage/' . $productseller->{'image'.$i.'_url'});
                }
            }
    
            return view('produkdetailseller.index', compact('productseller', 'imageUrls'));
        } catch (ModelNotFoundException $e) {
            abort(404); // Jika produk tidak ditemukan
        }
    }

    
}