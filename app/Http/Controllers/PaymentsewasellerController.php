<?php

namespace App\Http\Controllers;

use App\Models\PaymentsSewaSeller;
use App\Models\SewaSellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentsewasellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers_id = Auth::id(); // Mendapatkan ID seller yang login

        $paymentsewaseller = PaymentsSewaSeller::with('sewa') // Memuat relasi sewa
            ->whereHas('sewa', function($query) use ($sellers_id) {
                $query->where('sellers_id', $sellers_id); // Memfilter berdasarkan sellers_id
            })
            ->get();

        return view("paymentsewaseller.index", [
            'paymentsewaseller' => $paymentsewaseller
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tambahkan logika jika perlu
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Tambahkan logika untuk menyimpan data pembayaran sewa baru
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Cari data pembayaran sewa berdasarkan id
        $paymentsewaseller = PaymentsSewaSeller::where('id', $id)
            ->whereHas('sewa', function($query) {
                $query->where('sellers_id', Auth::id()); // Pastikan hanya seller yang login yang bisa melihat data ini
            })
            ->firstOrFail();

        return view('paymentsewaseller.show', [
            'paymentsewaseller' => $paymentsewaseller
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Cari data pembayaran sewa berdasarkan id
        $paymentsewaseller = PaymentsSewaSeller::where('id', $id)
            ->whereHas('sewa', function($query) {
                $query->where('sellers_id', Auth::id()); // Pastikan hanya seller yang login yang bisa mengedit data ini
            })
            ->firstOrFail();

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
            'sewa_sellers_id' => 'required|exists:sewa_sellers,id',
            'payment_date' => 'required|date',
            'payment_method' => 'required|in:Cash,Transfer,Qris', // Validasi untuk kolom metode
            'amount' => 'required|numeric|min:0' // Pastikan validasi amount
        ]);

        $paymentsewaseller = PaymentsSewaSeller::where('id', $id)
            ->whereHas('sewa', function($query) {
                $query->where('sellers_id', Auth::id()); // Pastikan hanya seller yang login yang bisa mengupdate data ini
            })
            ->firstOrFail();

        $paymentsewaseller->sewa_sellers_id = $request->input('sewa_sellers_id');
        $paymentsewaseller->payment_date = $request->input('payment_date');
        $paymentsewaseller->payment_method = $request->input('payment_method');
        $paymentsewaseller->amount = $request->input('amount');

        // Simpan perubahan
        $paymentsewaseller->save();

        return redirect('/paymentsewaseller')->with('success', 'Edit Payment Rent Saved Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari data pembayaran sewa berdasarkan id
        $paymentsewaseller = PaymentsSewaSeller::where('id', $id)
            ->whereHas('sewa', function($query) {
                $query->where('sellers_id', Auth::id()); // Pastikan hanya seller yang login yang bisa menghapus data ini
            })
            ->firstOrFail();

        // Hapus data pembayaran sewa
        $paymentsewaseller->delete();

        // Redirect kembali ke halaman index dengan pesan success
        return redirect()->route('paymentsewaseller.index')->with('success', 'Payment Rent Deleted Successfully!!');
    }
}
