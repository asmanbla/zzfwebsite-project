<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments;
use App\Models\Orders;
use Illuminate\Support\Facades\DB;

class PaymentOrdersZzfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('paymentorderszzf.index', [
        'payments' => Payments::all(),
    ]);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paymentorderszzf.create', [
            'orderid' => Orders::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Payments::create($request->all());
            // return $request->input();
            return redirect('/paymentorderszzf')->with('success', 'New Payment Order Added!');
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
    $paymentorderszzf = Payments::findOrFail($id);

    return view('paymentorderszzf.edit', [
        'paymentorderszzf' => $paymentorderszzf,
        'orderid' => Orders::all()
    ]);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Validasi input
    $request->validate([
        'order_id' => 'required|exists:customers,id',
        'payment_date' => 'required|date',
        'payment_method' => 'required|in:Cash,Transfer,Qris', // Validasi untuk kolom metode
        'amount' =>  'required|'
    ]);

    // Mengedit Data order
    $paymentorderszzf = Payments::findOrFail($id);
    $paymentorderszzf->order_id = $request->order_id;
    $paymentorderszzf->payment_date = $request->payment_date;
    $paymentorderszzf->payment_method = $request->payment_method;
    $paymentorderszzf->amount = $request->amount;
    $paymentorderszzf->save();

    return redirect('/paymentorderszzf')->with('success', 'Edit Payment Order Saved!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function hapuspaymentorderszzf($id)
    {
        $paymentorderszzf = Payments::find($id);
        if ($paymentorderszzf) {
            $paymentorderszzf->delete();
            return redirect('/paymentorderszzf')->with('success', 'Payment Order Deleted Successfully!');
        }
        return redirect('/paymentorderszzf')->with('error', 'Data not found!');
    }
}
