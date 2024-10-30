<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaSellers;
use App\Models\OrderSellers;
use App\Models\ProductSellers;

class CheckoutViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('checkout.index');
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
         // Validasi data input
         $request->validate([
             'checkout_type' => 'required|in:purchase,rent',
             'selected_items' => 'required|array|min:1',
             'total_amount' => 'required|numeric|min:0', // Pastikan total_amount valid
         ]);
     
         $checkoutType = $request->input('checkout_type');
         $selectedItems = $request->input('selected_items');
         $customerId = auth()->user()->id;
         $totalAmount = $request->input('total_amount'); // Ambil total_amount dari request
     
         foreach ($selectedItems as $itemId) {
             $item = ProductSellers::find($itemId);
             if (!$item) {
                 continue;
             }
     
             if ($checkoutType == 'purchase') {
                 OrderSellers::create([
                    'sellers_id' => $item->sellers_id,
                    'customers_id' => $customerId,
                    'order_date' => now(),
                    'total_amount' => $totalAmount, // Simpan total_amount
                    'status' => 'waiting for payment',
                 ]);
             } elseif ($checkoutType == 'rent') {
                 SewaSellers::create([
                     'sellers_id' => $item->sellers_id,
                     'customers_id' => $customerId,
                     'start_date' => now(),
                     'finish_date' => now()->addDays(7),
                     'total_amount' => $totalAmount, // Simpan total_amount
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
