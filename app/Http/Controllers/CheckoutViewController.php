<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaSellers;
use App\Models\OrderSellers;
use App\Models\Customers;
use App\Models\ProductSellers;
use App\Models\Carts;
use App\Models\Payments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CheckoutViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index(Request $request)
    {
        $customer = Auth::user();
        
        // Ambil ID barang yang dipilih dari session
        $selectedItemIds = session('selected_items', []);
        
        // Ambil checkout_type dari request atau session
        $checkoutType = $request->input('checkout_type') ?? session('checkout_type');

        // Simpan checkout_type dalam session jika ada
        if ($checkoutType) {
            session(['checkout_type' => $checkoutType]);
        }

        if (empty($selectedItemIds)) {
            // Jika tidak ada barang dipilih
            $selectedItems = collect();
            $message = "Tidak ada barang dipilih";
            $totalPrice = 0;
        } else {
            // Ambil item dari tabel carts dengan data produk terkait di tabel product_sellers
            $selectedItems = Carts::with('productSellers')
                                ->whereIn('products_sellers_id', $selectedItemIds)
                                ->where('customer_id', $customer->id)
                                ->get();

            $message = null; // Tidak ada pesan karena ada barang yang dipilih
            
            // Menghitung total harga berdasarkan kolom 'total' di tabel carts
            $totalPrice = $selectedItems->sum('total');
        }

        return view('checkout.index', compact('customer', 'selectedItems', 'totalPrice', 'message', 'checkoutType'));
    }

        
    public function store(Request $request)
    {
        // Get selected product IDs from the request
        $selectedItems = $request->input('selected_items', []);

        // Ensure $selectedItems is an array
        $selectedItems = is_array($selectedItems) ? $selectedItems : [];

        // Get checkout type from the request
        $checkoutType = $request->input('checkout_type', 'purchase'); // Default to 'purchase' if not set

        // Store selected product IDs and checkout type in the session
        session([
            'selected_items' => $selectedItems,
            'checkout_type' => $checkoutType,
        ]);

        // Redirect to the checkout page
        return redirect()->route('checkout.index')->with('success', 'Products successfully added to checkout!');
    }


    public function storecheckout(Request $request)
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

            DB::beginTransaction(); // Memulai transaksi

            try {
                foreach ($selectedItems as $itemId) {
                    $item = ProductSellers::find($itemId);
                    if (!$item) continue;

                    $cart = Carts::where('customer_id', $customerId)
                                ->where('products_sellers_id', $item->id)
                                ->where('status_cart', 'in_cart')
                                ->first();

                    if (!$cart) {
                        return redirect()->back()->with('error', 'Cart item tidak ditemukan untuk produk ini.');
                    }

                    $cart->status_cart = 'in_checkout';
                    $cart->save();

                    if ($checkoutType == 'purchase') {
                        $order = OrderSellers::create([
                            'carts_id' => $cart->id,
                            'sellers_id' => $item->sellers_id,
                            'customers_id' => $customerId,
                            'product_sellers_id' => $item->id,
                            'order_date' => now(),
                            'total_amount' => $totalAmount,
                            'status' => 'waiting for payment',
                        ]);

                        // Simpan data ke tabel Payments
                        Payments::create([
                            'sellers_id' => $item->sellers_id,
                            'order_sellers_id' => $order->id,
                            'payment_date' => now(),
                            'payment_method' => 'Transfer',
                            'amount' => $totalAmount,
                        ]);
                    } elseif ($checkoutType == 'rent') {
                        $sewa = SewaSellers::create([
                            'carts_id' => $cart->id,
                            'sellers_id' => $item->sellers_id,
                            'customers_id' => $customerId,
                            'product_sellers_id' => $item->id,
                            'start_date' => now(),
                            'finish_date' => now()->addDays(7),
                            'total_amount' => $totalAmount,
                            'status' => 'waiting for payment',
                        ]);

                        // Simpan data ke tabel Payments
                        Payments::create([
                            'sellers_id' => $item->sellers_id,
                            'sewa_sellers_id' => $sewa->id,
                            'payment_date' => now(),
                            'payment_method' => 'Transfer',
                            'amount' => $totalAmount,
                        ]);
                    }
                }

                DB::commit(); // Commit transaksi jika semua berhasil
                return redirect()->route('history.index')->with('success', 'Checkout Successfully!');

            } catch (\Exception $e) {
                DB::rollback(); // Rollback jika terjadi error
                return redirect()->back()->with('error', 'Checkout failed: ' . $e->getMessage());
            }
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
