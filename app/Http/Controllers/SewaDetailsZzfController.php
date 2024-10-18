<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SewaDetails;
use App\Models\Sewas;
use App\Models\ProductsZzf;

class SewaDetailsZzfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('sewadetailszzf.index', [
            'sdetails' => SewaDetails::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sewadetailszzf.create', [
            'idproductszzf' => ProductsZzf::all(),
            'sewasidzzf' => Sewas::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'products_zzfs_id' => 'required|integer',
        'sewas_id' => 'required|integer',
        'quantity' => 'required|integer',
        'subtotal' => 'required|numeric',
    ]);

    SewaDetails::create($validated);

    return redirect('/sewadetailszzf')->with('sukses', 'New Rent Detail Added!');
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
        $sewadetailszzf = SewaDetails::find($id);
        if (!$sewadetailszzf) return redirect()->route('sewadetailszzf.edit');
        return view('sewadetailszzf.edit', [
            'sewadetailszzf' => $sewadetailszzf
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
    public function hapussewadetailszzf($id)
    {
        $sewadetailszzf = SewaDetails::find($id);
        if ($sewadetailszzf) {
            $sewadetailszzf->delete();
            return redirect('/sewadetailszzf')->with('sukses', 'Rent Detail Deleted Successfully!');
        }
        return redirect('/sewadetailszzf')->with('error', 'Data not found!');
    }
}
