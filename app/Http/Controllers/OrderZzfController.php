<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Customers;
use Illuminate\Support\Facades\DB;

class OrderZzfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('orderzzf.index', [
        'customers' => Customers::all(),
        'vworderzzf' => DB::table('vworderzzf')->get() // Mengambil data dari view
    ]);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orderzzf.create', [
            'order' => Orders::all(),
            'custname' => Customers::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Orders::create($request->all());
            // return $request->input();
            return redirect('/orderzzf')->with('sukses', 'Order Baru Berhasil Ditambahkan!');
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
    $orderzzf = Orders::findOrFail($id);

    return view('orderzzf.edit', [
        'orderzzf' => $orderzzf,
        'customer' => Customers::all()
    ]);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Validasi input
    $request->validate([
        'customers_id' => 'required|exists:customers,id',
        'order_date' => 'required|date',
        'total_amount' => 'required|numeric',
        'status' => 'required|in:menunggu pembayaran,diproses,selesai', // Validasi untuk kolom status
    ]);

    // Mengedit Data order
    $orderzzf = Orders::findOrFail($id);
    $orderzzf->customers_id = $request->customers_id;
    $orderzzf->order_date = $request->order_date;
    $orderzzf->total_amount = $request->total_amount;
    $orderzzf->status = $request->status;
    $orderzzf->save();

    return redirect('/orderzzf')->with('sukses', 'Edit Order Berhasil Disimpan!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function hapusorderzzf($id)
    {
        $orderzzf = Orders::find($id);
        if ($orderzzf) {
            $orderzzf->delete();
            return redirect('/orderzzf')->with('sukses', 'Order Berhasil Dihapus!');
        }
        return redirect('/orderzzf')->with('error', 'Data not found!');
    }
}
