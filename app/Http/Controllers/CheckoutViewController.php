<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaSellers;
use App\Models\OrderSellers;
use App\Models\Customers;
use App\Models\ProductSellers;
use App\Models\Carts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customer = Auth::user();
    
        // Ambil semua barang yang telah dipesan dalam `OrderSellers` dan `SewaSellers`, bersama data `seller`
        $selectedItems = ProductSellers::with('seller')->whereIn('id', function ($query) use ($customer) {
            $query->select('product_sellers_id')
                  ->from('order_sellers')
                  ->where('customers_id', $customer->id);
        })->orWhereIn('id', function ($query) use ($customer) {
            $query->select('product_sellers_id')
                  ->from('sewa_sellers')
                  ->where('customers_id', $customer->id);
        })->get();
    
        // Hitung total harga
        $totalPrice = $selectedItems->sum(function ($item) {
            if ($item->type == 'purchase') {
                return $item->purchase_price;
            } elseif ($item->type == 'rent') {
                return $item->rent_price;
            }
            return 0;
        });
        
        return view('checkout.index', compact('customer', 'selectedItems', 'totalPrice'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'checkout_type' => 'required|in:purchase,rent',
            'selected_items' => 'required|array|min:1',
            'total_amount' => 'required|numeric|min:0',
        ]);
    
        $checkoutType = $request->input('checkout_type');
        $selectedItems = $request->input('selected_items');
        $customerId = auth()->user()->id;
        $totalAmount = $request->input('total_amount');
    
        foreach ($selectedItems as $itemId) {
            $item = ProductSellers::find($itemId);
            if (!$item) continue;
    
            if ($checkoutType == 'purchase') {
                OrderSellers::create([
                    'sellers_id' => $item->sellers_id,
                    'customers_id' => $customerId,
                    'product_sellers_id' => $item->id,  
                    'order_date' => now(),
                    'total_amount' => $totalAmount,
                    'status' => 'waiting for payment',
                ]);
            } elseif ($checkoutType == 'rent') {
                SewaSellers::create([
                    'sellers_id' => $item->sellers_id,
                    'customers_id' => $customerId,
                    'product_sellers_id' => $item->id,  
                    'start_date' => now(),
                    'finish_date' => now()->addDays(7),
                    'total_amount' => $totalAmount,
                    'status' => 'waiting for payment',
                ]);
            }
        }
    
        return redirect()->route('checkout.index')->with('success', 'Checkout berhasil!');
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
    public function hapuscart($id)
    {
        $cartItem = Carts::findOrFail($id);
        $cartItem->delete();

        return redirect()->back()->with('success', 'Item berhasil dihapus dari keranjang!');
    }
}
