<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\ServiceReviews;
use Illuminate\Support\Facades\DB;

class ServiceReviewsZzfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('servicereviewszzf.index', [
        'customers' => Customers::all(),
        'vwservicereview' => DB::table('vwservicereview')->get() // Mengambil data dari view
    ]);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicereviewszzf.create', [
            'sreview' => ServiceReviews::all(),
            'custname' => Customers::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ServiceReviews::create($request->all());
            // return $request->input();
            return redirect('/servicereviewszzf')->with('success', 'New reviews data with the id "' .$request -> id. '"    has been successfully saved!');
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
    
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Validasi input
    $request->validate([
        'customers_id' => 'required|exists:customers,id',
        'products_id' => 'required|exists:products,id',
        'rating' => 'required|',
        'comment' => 'required|',
    ]);

    // Mengedit Data order
    $produkreviewszzf = ServiceReviews::findOrFail($id);
    $produkreviewszzf->customers_id = $request->customers_id;
    $produkreviewszzf->products_id = $request->products_id;
    $produkreviewszzf->rating = $request->total_amount;
    $produkreviewszzf->comment = $request->comment;
    $produkreviewszzf->save();

    return redirect('/servicezzfreviews')->with('success', 'Review Data Updated Successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function hapussreviewszzf($id)
    {
        $hapussreviewszzf = ServiceReviews::find($id);
        if ($hapussreviewszzf) {
            $hapussreviewszzf->delete();
            return redirect('/servicereviewszzf')->with('success', 'The Reviews Data Successfully Deleted!');
        }
        return redirect('/servicereviewszzf')->with('error', 'Data not found!');
    }
}
