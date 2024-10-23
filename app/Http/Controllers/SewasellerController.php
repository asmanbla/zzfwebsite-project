<?php

namespace App\Http\Controllers;
use App\Models\SewaSellers;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SewasellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers_id = Auth::id(); // Mendapatkan ID seller yang login

        // Hanya mengambil data sewa yang dimiliki oleh seller yang sedang login
        $vwsewaseller = SewaSellers::with('name')->where('sellers_id', $sellers_id)->get(); 

        return view('sewaseller.index', [
            'vwsewaseller' => $vwsewaseller,
            'customers' => Customers::all(), // Jika Anda ingin tetap menampilkan semua customer
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
        $sewaseller = SewaSellers::findOrFail($id);
    
            return view('sewaseller.edit', [
                'sewaseller' => $sewaseller,
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

    $sewaseller = SewaSellers::findOrFail($id);
    $sewaseller->customers_id = $request->input('customers_id');
    $sewaseller->order_date = $request->input('order_date');
    $sewaseller->total_amount = $request->input('total_amount');
    $sewaseller->status = $request->input('status');

    // Simpan perubahan
    $sewaseller->save();

    return redirect('/sewaseller')->with('success', 'Edit Rent Saved Successfully!!!');
}

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    // Cari data sewa seller berdasarkan id
    $sewaseller = SewaSellers::findOrFail($id);

    // Hapus data sewa seller
    $sewaseller->delete();

    // Redirect kembali ke halaman index dengan pesan success
    return redirect()->route('sewaseller.index')->with('success', 'Rent Data Deleted Successfully!');
}

}
