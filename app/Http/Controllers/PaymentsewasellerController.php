<?php

namespace App\Http\Controllers;
use App\Models\PaymentsSewaSeller;
use App\Models\SewaSellers;
use Illuminate\Http\Request;

class PaymentsewasellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("paymentsewaseller.index", [
            'paymentsewaseller' => PaymentsSewaSeller::all()
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
        $paymentsewaseller = PaymentsSewaSeller::findOrFail($id);
    
            return view('paymentsewaseller.edit', [
                'paymentsewaseller' => $paymentsewaseller,
                'sewaseller' => SewaSellers::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'sewa_sellers_id' => 'required||exists:customers,id',
        'payment_date' => 'required|date',
        'payment_method' => 'required|in:Cash,Transfer,Qris', // Validasi untuk kolom metode
        'amount' =>  'required|'
    ]);

    $paymentsewaseller = PaymentsSewaSeller::findOrFail($id);
    $paymentsewaseller->sewa_sellers_id = $request->input('sewa_sellers_id');
    $paymentsewaseller->payment_date = $request->input('payment_date');
    $paymentsewaseller->payment_method = $request->input('payment_method');
    $paymentsewaseller->amount = $request->input('amount');

    // Simpan perubahan
    $paymentsewaseller->save();

    return redirect('/paymentsewaseller')->with('success', 'sewa Data Updated Successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari data ordetail seller berdasarkan id
        $paymentsewaseller = PaymentsSewaSeller::findOrFail($id);
    
        // Hapus data ordetail seller
        $paymentsewaseller->delete();
    
        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('paymentsewaseller.index')->with('success', 'sewa detail Data Deleted Successfully');
    }
}
