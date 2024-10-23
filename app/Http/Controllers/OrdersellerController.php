<?php

namespace App\Http\Controllers;
use App\Models\OrderSellers;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrdersellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers_id = Auth::id(); // Mendapatkan ID seller yang login

        // Mengambil data order yang hanya dimiliki oleh seller yang sedang login
        $vworderseller = OrderSellers::with('name')
            ->where('sellers_id', $sellers_id) // Filter berdasarkan sellers_id
            ->get();

        return view('orderseller.index', [
            'vworderseller' => $vworderseller,
            'customers' => Customers::all(),
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
        $orderseller = OrderSellers::where('id', $id)
            ->where('sellers_id', Auth::id()) // Pastikan seller hanya bisa mengedit data yang sesuai dengan ID mereka
            ->firstOrFail();
    
        return view('orderseller.edit', [
            'orderseller' => $orderseller,
            'customers' => Customers::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'customers_id' => 'required|exists:customers,id',
            'order_date' => 'required|date',
            'total_amount' => 'required|numeric|min:0',
            'status' => 'required|string|max:500',
        ]);

        $orderseller = OrderSellers::where('id', $id)
            ->where('sellers_id', Auth::id()) // Pastikan hanya seller yang memiliki order yang bisa mengeditnya
            ->firstOrFail();

        $orderseller->customers_id = $request->input('customers_id');
        $orderseller->order_date = $request->input('order_date');
        $orderseller->total_amount = $request->input('total_amount');
        $orderseller->status = $request->input('status');

        // Simpan perubahan
        $orderseller->save();

        return redirect('/orderseller')->with("success", 'Edit Order Saved Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $orderseller = OrderSellers::where('id', $id)
            ->where('sellers_id', Auth::id()) // Pastikan hanya seller yang memiliki order yang bisa menghapusnya
            ->firstOrFail();

        // Hapus data order seller
        $orderseller->delete();

        return redirect()->route('orderseller.index')->with("success", 'Order Deleted Successfully!!');
    }
}
