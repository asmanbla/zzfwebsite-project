<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentsSellers;
use App\Models\OrderSellers;
class PaymentordersellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("paymentorderseller.index", [
            'paymentorderseller' => PaymentsSellers::all()
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
        $paymentorderseller = PaymentsSellers::findOrFail($id);
    
            return view('paymentorderseller.edit', [
                'paymentorderseller' => $paymentorderseller,
                'orderseller' => OrderSellers::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'order_sellers_id' => 'required|exists:customers,id',
        'payment_date' => 'required|date',
        'payment_method' => 'required|in:Cash,Transfer,Qris', // Validasi untuk kolom metode
        'amount' =>  'required|'
    ]);

    $paymentorderseller = PaymentsSellers::findOrFail($id);
    $paymentorderseller->order_sellers_id = $request->input('order_sellers_id');
    $paymentorderseller->payment_date = $request->input('payment_date');
    $paymentorderseller->payment_method = $request->input('payment_method');
    $paymentorderseller->amount = $request->input('amount');

    // Simpan perubahan
    $paymentorderseller->save();

    return redirect('/paymentorderseller')->with('success', 'sewa Data Updated Successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari data ordetail seller berdasarkan id
        $paymentorderseller = PaymentsSellers::findOrFail($id);
    
        // Hapus data ordetail seller
        $paymentorderseller->delete();
    
        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('paymentorderseller.index')->with('success', 'sewa detail Data Deleted Successfully');
    }
}
