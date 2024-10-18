<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetails;
use App\Models\Orders;
use App\Models\ProductsZzf;

class OrderDetailsZzfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('orderdetailszzf.index', [
            'odetails' => OrderDetails::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orderdetailszzf.create', [
            'idproductszzf' => ProductsZzf::all(),
            'ordersidzzf' => Orders::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'products_zzfs_id' => 'required|integer',
        'orders_id' => 'required|integer',
        'quantity' => 'required|integer',
        'subtotal' => 'required|numeric',
    ]);

    OrderDetails::create($validated);

    return redirect('/orderdetailszzf')->with('success', 'New Order Detail Added!');
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
    public function edit($id)
    {
        //Menampilkan Form Edit
        $orderdetailszzf = OrderDetails::find($id);
        if (!$orderdetailszzf) return redirect()->route('orderdetailszzf.edit');
        return view('orderdetailszzf.edit', [
            'orderdetailszzf' => $orderdetailszzf
        ]); 
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
    public function hapusorderdetailszzf($id)
    {
        $orderdetailszzf = OrderDetails::find($id);
        if ($orderdetailszzf) {
            $orderdetailszzf->delete();
            return redirect('/orderdetailszzf')->with('success', 'Order Detail Deleted Successfully!');
        }
        return redirect('/orderdetailszzf')->with('error', 'Data not found!');
    }
}
