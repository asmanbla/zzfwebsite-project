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
     
         // Ambil data dari view `vworderseller` hanya untuk item yang baru ditambahkan ke cart customer
         $orderItems = DB::table('vworderseller')
                         ->where('customers_id', $customer->id)
                         ->where('status_cart', 'in_cart')  // Pastikan hanya mengambil item di cart
                         ->get();
     
         // Ambil data dari view `vwsewaseller` hanya untuk item yang baru ditambahkan ke cart customer
         $rentalItems = DB::table('vwsewaseller')
                          ->where('customers_id', $customer->id)
                          ->where('status_cart', 'in_cart')  // Pastikan hanya mengambil item di cart
                          ->get();
     
         // Gabungkan hasil dari kedua view menjadi `selectedItems`
         $selectedItems = $orderItems->merge($rentalItems);
     
         // Hitung total harga
         $totalPrice = $selectedItems->sum('total');
     
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
     
             // Mendapatkan carts_id dari tabel Carts berdasarkan customer dan produk
             $cart = Carts::where('customer_id', $customerId)
                          ->where('products_sellers_id', $item->id)
                          ->where('status_cart', 'in_cart') // Pastikan hanya mengambil yang status_cart 'in_cart'
                          ->first();
     
             if (!$cart) {
                 return redirect()->back()->with('error', 'Cart item tidak ditemukan untuk produk ini.');
             }
     
             // Mengupdate status cart menjadi 'in_checkout'
             $cart->update(['status_cart' => 'in_checkout']);
     
             if ($checkoutType == 'purchase') {
                 OrderSellers::create([
                     'carts_id' => $cart->id,
                     'sellers_id' => $item->sellers_id,
                     'customers_id' => $customerId,
                     'product_sellers_id' => $item->id,  
                     'order_date' => now(),
                     'total_amount' => $totalAmount,
                     'status' => 'waiting for payment',
                 ]);
             } elseif ($checkoutType == 'rent') {
                 SewaSellers::create([
                     'carts_id' => $cart->id,
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
