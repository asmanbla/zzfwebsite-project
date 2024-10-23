<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentsSellers;
use App\Models\OrderSellers;
use Illuminate\Support\Facades\Auth;

class PaymentordersellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers_id = Auth::id(); // Mendapatkan ID seller yang login

        // Mengambil data pembayaran yang hanya dimiliki oleh seller yang sedang login
        return view("paymentorderseller.index", [
            'paymentorderseller' => PaymentsSellers::whereHas('order', function($query) use ($sellers_id) {
                $query->where('sellers_id', $sellers_id);
            })->get(),
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
        $sellers_id = Auth::id(); // Mendapatkan ID seller yang login

        // Cari data pembayaran berdasarkan id dan seller yang sedang login
        $paymentorderseller = PaymentsSellers::where('id', $id)
            ->whereHas('order', function($query) use ($sellers_id) {
                $query->where('sellers_id', $sellers_id);
            })->firstOrFail();
    
        return view('paymentorderseller.edit', [
            'paymentorderseller' => $paymentorderseller,
            'orderseller' => OrderSellers::where('sellers_id', $sellers_id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'order_sellers_id' => 'required|exists:order_sellers,id', // Validasi berdasarkan ID pesanan yang ada
            'payment_date' => 'required|date',
            'payment_method' => 'required|in:Cash,Transfer,Qris', // Validasi metode pembayaran
            'amount' => 'required|numeric|min:0', // Validasi jumlah pembayaran
        ]);

        $sellers_id = Auth::id(); // Mendapatkan ID seller yang login

        // Cari data pembayaran berdasarkan id dan seller yang sedang login
        $paymentorderseller = PaymentsSellers::where('id', $id)
            ->whereHas('order', function($query) use ($sellers_id) {
                $query->where('sellers_id', $sellers_id);
            })->firstOrFail();

        // Update data pembayaran
        $paymentorderseller->order_sellers_id = $request->input('order_sellers_id');
        $paymentorderseller->payment_date = $request->input('payment_date');
        $paymentorderseller->payment_method = $request->input('payment_method');
        $paymentorderseller->amount = $request->input('amount');

        // Simpan perubahan
        $paymentorderseller->save();

        return redirect('/paymentorderseller')->with('success', 'Edit Payment Order Saved Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sellers_id = Auth::id(); // Mendapatkan ID seller yang login

        // Cari data pembayaran berdasarkan id dan seller yang sedang login
        $paymentorderseller = PaymentsSellers::where('id', $id)
            ->whereHas('order', function($query) use ($sellers_id) {
                $query->where('sellers_id', $sellers_id);
            })->firstOrFail();
    
        // Hapus data pembayaran
        $paymentorderseller->delete();
    
        return redirect()->route('paymentorderseller.index')->with('success', 'Payment Order Deleted Successfully!!');
    }
}
