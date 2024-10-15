<?php

namespace App\Http\Controllers;
use App\Models\OrderSellers;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $vworderseller = OrderSellers::with('name')->get(); // Menggunakan relasi 'name' dari model
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
        $orderseller = OrderSellers::findOrFail($id);
    
            return view('orderseller.edit', [
                'orderseller' => $orderseller,
                'customers' => Customers::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'customers_id' => 'required|exists:customers,id',
        'order_date' => 'required|date', // Ganti numeric dengan date
        'total_amount' => 'required|numeric|min:0',
        'status' => 'required|string|max:500',
    ]);

    $orderseller = OrderSellers::findOrFail($id);
    $orderseller->customers_id = $request->input('customers_id');
    $orderseller->order_date = $request->input('order_date');
    $orderseller->total_amount = $request->input('total_amount');
    $orderseller->status = $request->input('status');

    // Simpan perubahan
    $orderseller->save();

    return redirect('/orderseller')->with("sukses", 'Edit Order Berhasil Disimpan');
}

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    // Cari data order seller berdasarkan id
    $orderseller = OrderSellers::findOrFail($id);

    // Hapus data order seller
    $orderseller->delete();

    // Redirect kembali ke halaman index dengan pesan sukses
    return redirect()->route('orderseller.index')->with("sukses", 'Order Berhasil Dihapus!');
}

}
