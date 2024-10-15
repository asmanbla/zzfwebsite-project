<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentsSewa;
use App\Models\Sewas;
use Illuminate\Support\Facades\DB;

class PaymentSewasZzfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('paymentsewaszzf.index', [
        'paymentsewa' => PaymentsSewa::all(),
    ]);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paymentsewaszzf.create', [
            'sewaid' => Sewas::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PaymentsSewa::create($request->all());
            // return $request->input();
            return redirect('/paymentsewaszzf')->with('sukses', 'Pembayaran Sewa Baru Berhasil Ditambahkan!');
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
    $paymentsewaszzf = PaymentsSewa::findOrFail($id);

    return view('paymentsewaszzf.edit', [
        'paymentsewaszzf' => $paymentsewaszzf,
        'sewaid' => Sewas::all()
    ]);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Validasi input
    $request->validate([
        'sewas_id' => 'required|exists:customers,id',
        'payment_date' => 'required|date',
        'payment_method' => 'required|in:Cash,Transfer,Qris', // Validasi untuk kolom metode
        'amount' =>  'required|'
    ]);

    // Mengedit Data order
    $paymentsewaszzf = PaymentsSewa::findOrFail($id);
    $paymentsewaszzf->sewas_id = $request->sewas_id;
    $paymentsewaszzf->payment_date = $request->payment_date;
    $paymentsewaszzf->payment_method = $request->payment_method;
    $paymentsewaszzf->amount = $request->amount;
    $paymentsewaszzf->save();

    return redirect('/paymentsewaszzf')->with('sukses', 'Edit Pembayaran Sewa Berhasil Disimpan!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function hapuspaymentsewaszzf($id)
    {
        $paymentsewaszzf = PaymentsSewa::find($id);
        if ($paymentsewaszzf) {
            $paymentsewaszzf->delete();
            return redirect('/paymentsewaszzf')->with('sukses', 'Pembayaran Sewa Berhasil Dihapus!');
        }
        return redirect('/paymentsewaszzf')->with('error', 'Data not found!');
    }
}
