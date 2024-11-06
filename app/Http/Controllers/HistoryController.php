<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetailsSellers;
use App\Models\SewaDetailsSellers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   

    public function index()
    {
       // Ambil data dari tabel cart berdasarkan customer_id
       $customer = Auth::user();
        
        // Ambil data dari view berdasarkan sellers_id (ID pengguna)
        $orderDetails = DB::table('vworderdetailsellers')
                        ->where('sellers_id', $customer)
                        ->get();

        $sewaDetails = DB::table('vwsewadetailsellers')
                        ->where('sellers_id', $customer)
                        ->get();

        // Kirim data ke view
        return view('history.index', compact('orderDetails', 'sewaDetails'));
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
        //
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
    public function destroy(string $id)
    {
        //
    }
}
