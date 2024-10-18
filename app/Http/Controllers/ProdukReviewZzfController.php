<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\ProductsZzf;
use App\Models\ProductReviews;
use Illuminate\Support\Facades\DB;

class ProdukReviewZzfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    return view('produkreviewszzf.index', [
        'customers' => Customers::all(),
        'vwproductreviewzzf' => DB::table('vwproductreviewzzf')->get() // Mengambil data dari view
    ]);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produkreviewszzf.create', [
            'preview' => ProductReviews::all(),
            'custname' => Customers::all(),
            'pname' => ProductReviews::all(),
            'prodname' => ProductsZzf::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProductReviews::create($request->all());
            // return $request->input();
            return redirect('/produkreviewszzf')->with('sukses', 'New Product Review Added!');
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
    $produkreviewszzf = ProductReviews::findOrFail($id);

    return view('produkreviewszzf.edit', [
        'produkreviewszzf' => $produkreviewszzf,
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
        'products_id' => 'required|exists:products,id',
        'rating' => 'required|',
        'comment' => 'required|',
    ]);

    // Mengedit Data order
    $produkreviewszzf = ProductReviews::findOrFail($id);
    $produkreviewszzf->customers_id = $request->customers_id;
    $produkreviewszzf->products_id = $request->products_id;
    $produkreviewszzf->rating = $request->total_amount;
    $produkreviewszzf->comment = $request->comment;
    $produkreviewszzf->save();

    return redirect('/produkreviewszzf')->with('sukses', 'Edit Product Review Saved!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function hapuspreviewszzf($id)
    {
        $hapuspreviewszzf = ProductReviews::find($id);
        if ($hapuspreviewszzf) {
            $hapuspreviewszzf->delete();
            return redirect('/produkreviewszzf')->with('sukses', 'Product Review Deleted Successfully!');
        }
        return redirect('/produkreviewszzf')->with('error', 'Data not found!');
    }
}
