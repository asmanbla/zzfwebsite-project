<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewas;
use App\Models\Customers;
use Illuminate\Support\Facades\DB;

class SewaZzfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('sewazzf.index', [
        'customers' => Customers::all(),
        'vwsewas' => DB::table('vwsewas')->get() // Mengambil data dari view
    ]);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sewazzf.create', [
            'sewa' => Sewas::all(),
            'custname' => Customers::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sewas::create($request->all());
            // return $request->input();
            return redirect('/sewazzf')->with('sukses', 'Sewa Berhasil Ditambahkan!');
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
    $sewazzf = Sewas::findOrFail($id);

    return view('sewazzf.edit', [
        'sewazzf' => $sewazzf,
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
    $sewazzf = Sewas::findOrFail($id);
    $sewazzf->customers_id = $request->customers_id;
    $sewazzf->order_date = $request->order_date;
    $sewazzf->total_amount = $request->total_amount;
    $sewazzf->status = $request->status;
    $sewazzf->save();

    return redirect('/sewazzf')->with('sukses', 'Edit Sewa Berhasil Disimpan');
}


    /**
     * Remove the specified resource from storage.
     */
    public function hapussewazzf($id)
    {
        $sewazzf = Sewas::find($id);
        if ($sewazzf) {
            $sewazzf->delete();
            return redirect('/sewazzf')->with('sukses', 'Sewa Berhasil Dihapus');
        }
        return redirect('/sewazzf')->with('error', 'Data not found!');
    }
}
