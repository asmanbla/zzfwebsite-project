<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsZzf;
use App\Models\ProductSellers;
use App\Models\Carts;
use Illuminate\Support\Facades\Auth;

class ProductViewController extends Controller
{
    /**
     * Display a listing of the resource for products with type 'purchase'.
     */
    public function showProductPurchase()
    {
        // Ambil produk yang dijual dengan tipe 'purchase'
        $productsForSale = ProductSellers::with(['seller', 'category'])
            ->where('type', 'purchase')
            ->get();
    
        // Hitung total item di keranjang
        $totalItems = $this->getTotalCartItems();
    
        return view('prodviewpurchase.index', [
            'productsForSale' => $productsForSale,
            'totalItems' => $totalItems,
        ]);
    }
    

    /**
     * Display a listing of the resource for products with type 'rent'.
     */
    public function showProductRent()
        {
            // Ambil produk yang disewakan dengan tipe 'rent'
            $productsForRent = ProductSellers::with(['seller', 'category'])
                ->where('type', 'rent')
                ->get();

            // Hitung total item di keranjang
            $totalItems = $this->getTotalCartItems();

            return view('prodviewrent.index', [
                'productsForRent' => $productsForRent,
                'totalItems' => $totalItems,
            ]);
        }


    /**
     * Display a listing of the resource for products with type 'rent_and_purchase'.
     */
    public function showProductAll()
    {
        // Ambil produk yang dijual dengan tipe 'purchase'
        $productsForAll = ProductSellers::with(['seller', 'category'])
            ->where('type', 'rent_and_purchase')
            ->get();
    
        // Hitung total item di keranjang
        $totalItems = $this->getTotalCartItems();
    
        return view('prodviewall.index', [
            'productsForAll' => $productsForAll,
            'totalItems' => $totalItems,
        ]);
    }

    /**
     * Get total items in cart for the logged-in customer.
     */
    private function getTotalCartItems()
    {
        if (Auth::guard('customers')->check()) {
            $customerId = Auth::guard('customers')->id();
            return Carts::where('customer_id', $customerId)->sum('quantity');
        }

        return 0;
    }
}
