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
    public function showProductPurchaseTowerCrane()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForOrder = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['purchase', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'tower_crane'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('towercrane.purchase', [
        'productsForOrder' => $productsForOrder, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}

public function showProductRentTowerCrane()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForRent = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['rent', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'tower_crane'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('towercrane.rent', [
        'productsForRent' => $productsForRent, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}

public function showProductPurchasePassengerHoist()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForOrder = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['purchase', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'passenger_hoist'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('passengerhoist.purchase', [
        'productsForOrder' => $productsForOrder, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}

public function showProductRentPassengerHoist()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForRent = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['rent', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'passenger_hoist'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('passengerhoist.rent', [
        'productsForRent' => $productsForRent, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}

public function showProductPurchaseFormWork()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForOrder = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['purchase', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'form_work'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('formwork.purchase', [
        'productsForOrder' => $productsForOrder, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}

public function showProductRentFormWork()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForRent = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['rent', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'form_work'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('formwork.rent', [
        'productsForRent' => $productsForRent, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}

public function showProductPurchaseScaffolding()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForOrder = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['purchase', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'scaffolding'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('scaffolding.purchase', [
        'productsForOrder' => $productsForOrder, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}

public function showProductRentScaffolding()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForRent = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['rent', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'scaffolding'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('scaffolding.rent', [
        'productsForRent' => $productsForRent, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}
 
public function showProductPurchasePlacingBoom()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForOrder = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['purchase', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'placing_boom'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('placingboom.purchase', [
        'productsForOrder' => $productsForOrder, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}

public function showProductRentPlacingBoom()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForRent = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['rent', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'placing_boom'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('placingboom.rent', [
        'productsForRent' => $productsForRent, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}
 
public function showProductPurchaseSafetyNet()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForOrder = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['purchase', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'safety_net'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('safetynet.purchase', [
        'productsForOrder' => $productsForOrder, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}

public function showProductRentSafetyNet()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForRent = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['rent', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'safety_net'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('safetynet.rent', [
        'productsForRent' => $productsForRent, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}
public function showProductPurchaseConcretePump()
{
    // Ambil produk dengan tipe 'purchase' dan 'rent_and_purchase' serta kategori 'tower_crane'
    $productsForOrder = ProductSellers::with(['seller', 'category'])
        ->whereIn('type', ['purchase', 'rent_and_purchase']) // Filter berdasarkan tipe 'purchase' dan 'rent_and_purchase'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'concrete_pump'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('concretepump.purchase', [
        'productsForOrder' => $productsForOrder, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}
public function showProductRentConcretePump()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForRent = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['rent', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'concrete_pump'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('concretepump.rent', [
        'productsForRent' => $productsForRent, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}
 

public function showProductPurchaseConcreteBatchingPlant()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForOrder = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['purchase', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'concrete_batching_plant'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('concretebatchingplant.purchase', [
        'productsForOrder' => $productsForOrder, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}

public function showProductRentConcreteBatchingPlant()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForRent = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['rent', 'rent_and_purchase'])// Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'concrete_batching_plant'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('concretebatchingplant.rent', [
        'productsForRent' => $productsForRent, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}

public function showProductPurchaseMobileCrane()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForOrder = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['purchase', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'mobile_crane'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('mobilecrane.purchase', [
        'productsForOrder' => $productsForOrder, // Kirim data produk ke view
        'totalItems' => $totalItems,
    ]);
}

public function showProductRentMobileCrane()
{
    // Ambil produk dengan tipe 'order' dan kategori 'tower_crane'
    $productsForRent = ProductSellers::with(['seller', 'category'])
    ->whereIn('type', ['rent', 'rent_and_purchase']) // Filter berdasarkan tipe 'order'
        ->whereHas('category', function ($query) {
            // Pastikan Anda menggunakan nama kolom yang tepat untuk kategori
            $query->where('kategori', 'mobile_crane'); // Ganti 'category_name' dengan nama kolom yang benar jika perlu
        })
        ->get();

    // Hitung total item di keranjang
    $totalItems = $this->getTotalCartItems();

    return view('mobilecrane.rent', [
        'productsForRent' => $productsForRent, // Kirim data produk ke view
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
