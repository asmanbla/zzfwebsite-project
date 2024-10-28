<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsZzf;
use App\Models\ProductSellers;
use App\Models\Orders;
use App\Models\OrderSellers;
use App\Models\Sewas;
use App\Models\SewaSellers;
use Illuminate\Support\Facades\Auth;

class OrderPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customerId = Auth::id(); // Mendapatkan ID customer yang login
        return view('orderpage.index');
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
    public function storezzf(Request $request)
    {
        $validatedData = $request->validate([
            'action' => 'required|string',
            'customer_id' => 'required|integer',
            'products' => 'required|array',
            'quantities' => 'required|array',
        ]);
    
        $action = $validatedData['action'];
        $customerId = $validatedData['customer_id'];
        
        // Inisialisasi total_amount
        $totalAmount = 0;
    
        // Loop untuk menghitung total amount
        foreach ($validatedData['products'] as $productId => $product) {
            $quantity = $validatedData['quantities'][$productId];
            // Ambil produk berdasarkan ID
            $productDetails = ProductZzf::findOrFail($productId); // Atau ProductSellers::findOrFail($productId) sesuai kebutuhan
            $totalAmount += $productDetails->price * $quantity;
        }
    
        if ($action === 'buy') {
            // Simpan data ke tabel orders
            Orders::create([
                'customers_id' => $customerId,
                'order_date' => now(),
                'total_amount' => $totalAmount,
                'status' => 'pending', // Atur status sesuai kebutuhan
            ]);
        } elseif ($action === 'rent') {
            // Simpan data ke tabel sewas
            Sewas::create([
                'sellers_id' => $productDetails->seller_id, // Ambil seller_id dari produk
                'customers_id' => $customerId,
                'start_date' => now(), // Atur tanggal mulai sewa
                'finish_date' => now()->addDays(7), // Atur tanggal selesai sewa
                'total_amount' => $totalAmount,
                'status' => 'pending', // Atur status sesuai kebutuhan
            ]);
        }
    
        // Redirect atau melakukan tindakan setelah penyimpanan
        return redirect()->route('order.success')->with('message', 'Order has been created successfully.');
    }
    
    public function storeseller(Request $request)
    {
        $validatedData = $request->validate([
            'action' => 'required|string',
            'customer_id' => 'required|integer',
            'products' => 'required|array',
            'quantities' => 'required|array',
        ]);
    
        $action = $validatedData['action'];
        $customerId = $validatedData['customer_id'];
        
        // Inisialisasi total_amount
        $totalAmount = 0;
    
        // Loop untuk menghitung total amount
        foreach ($validatedData['products'] as $productId => $product) {
            $quantity = $validatedData['quantities'][$productId];
            // Ambil produk berdasarkan ID
            $productDetails = ProductSellers::findOrFail($productId); // Atau ProductSellers::findOrFail($productId) sesuai kebutuhan
            $totalAmount += $productDetails->price * $quantity;
        }
    
        if ($action === 'buy') {
            // Simpan data ke tabel orders
            OrderSellers::create([
                'customers_id' => $customerId,
                'order_date' => now(),
                'total_amount' => $totalAmount,
                'status' => 'pending', // Atur status sesuai kebutuhan
            ]);
        } elseif ($action === 'rent') {
            // Simpan data ke tabel sewas
            SewaSellers::create([
                'sellers_id' => $productDetails->seller_id, // Ambil seller_id dari produk
                'customers_id' => $customerId,
                'start_date' => now(), // Atur tanggal mulai sewa
                'finish_date' => now()->addDays(7), // Atur tanggal selesai sewa
                'total_amount' => $totalAmount,
                'status' => 'pending', // Atur status sesuai kebutuhan
            ]);
        }
    
        // Redirect atau melakukan tindakan setelah penyimpanan
        return redirect()->route('order.success')->with('message', 'Order has been created successfully.');
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
