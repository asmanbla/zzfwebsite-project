<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetailsSellers;
use App\Models\SewaDetailsSellers;
use App\Models\Customers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PDF;


class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   

     public function index()
     {
         $customerId = Auth::id();
     
         // Menggunakan alias 'order_detail_id' untuk kolom ID
         $orderDetails = DB::table('vworderdetailsellers')
             ->where('customers_id', $customerId)
             ->select('order_detail_id', 'sellers_id', 'seller_name', 'customers_id', 'customers_name', 'product_sellers_id', 'product_seller_name', 'order_sellers_id', 'order_date', 'quantity', 'subtotal', 'status') // Ganti id dengan order_detail_id
             ->get();
     
         $sewaDetails = DB::table('vwsewadetailsellers')
             ->where('customers_id', $customerId)
             ->select('sewa_detail_id','sellers_id', 'seller_name', 'customers_id', 'customers_name', 'product_seller_name', 'sewa_sellers_id', 'start_date','finish_date', 'quantity', 'subtotal', 'status') // Sesuaikan dengan alias yang benar
             ->get();
     
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

    public function downloadReceiptOrder($id)
{
    // Ambil data order berdasarkan ID
    $orderDetails = DB::table('order_details_sellers')
                      ->join('sellers', 'order_details_sellers.sellers_id', '=', 'sellers.id')
                      ->join('product_sellers', 'order_details_sellers.product_sellers_id', '=', 'product_sellers.id')
                      ->join('order_sellers', 'order_details_sellers.order_sellers_id', '=', 'order_sellers.id')
                      ->join('customers', 'order_details_sellers.customers_id', '=', 'customers.id')
                      ->select('order_details_sellers.*', 'sellers.name as seller_name', 'product_sellers.product_name as product_seller_name', 'order_sellers.order_date', 'order_sellers.status', 'customers.name as customer_name')
                      ->where('order_details_sellers.order_sellers_id', $id)
                      ->first();

    // Pastikan data order ditemukan
    if (!$orderDetails) {
        return redirect()->back()->with('error', 'Data Order tidak ditemukan');
    }

    // Ambil data customer berdasarkan email yang sedang login
    $customer = Customers::where('email', auth()->user()->email)->first();

    // Pastikan customer ditemukan
    if (!$customer) {
        return redirect()->back()->with('error', 'Customer tidak ditemukan');
    }

    // Load view dan kirim data order dan customer ke dalamnya
    $pdf = PDF::loadView('odetailstruk', compact('orderDetails', 'customer'));

    // Generate PDF dan kirim untuk diunduh
    return $pdf->download('Bukti_Pembayaran_Order' . $id . '.pdf');
}

public function downloadReceiptSewa($id)
{
    // Ambil data order berdasarkan ID
    $sewaDetails = DB::table('sewa_details_sellers')
                      ->join('sellers', 'sewa_details_sellers.sellers_id', '=', 'sellers.id')
                      ->join('product_sellers', 'sewa_details_sellers.product_sellers_id', '=', 'product_sellers.id')
                      ->join('sewa_sellers', 'sewa_details_sellers.sewa_sellers_id', '=', 'sewa_sellers.id')
                      ->join('customers', 'sewa_details_sellers.customers_id', '=', 'customers.id')
                      ->select('sewa_details_sellers.*', 'sellers.name as seller_name', 'product_sellers.product_name as product_seller_name', 
                               'sewa_sellers.start_date', 'sewa_sellers.finish_date', 'sewa_sellers.status', 'customers.name as customer_name')
                      ->where('sewa_details_sellers.sewa_sellers_id', $id)
                      ->first();

    // Pastikan data order ditemukan
    if (!$sewaDetails) {
        return redirect()->back()->with('error', 'Data Seller tidak ditemukan');
    }

    // Ambil data customer berdasarkan email yang sedang login
    $customer = Customers::where('email', auth()->user()->email)->first();

    // Pastikan customer ditemukan
    if (!$customer) {
        return redirect()->back()->with('error', 'Customer tidak ditemukan');
    }

    // Load view dan kirim data order dan customer ke dalamnya
    $pdf = PDF::loadView('sdetailstruk', compact('sewaDetails', 'customer'));

    // Generate PDF dan kirim untuk diunduh
    return $pdf->download('Bukti_Pembayaran_Sewa' . $id . '.pdf');
}

}