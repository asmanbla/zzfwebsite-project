<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LatestProject;
use App\Models\ProductSellers;

class LatestProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('latestproject.index', [
            'latestproject' => LatestProject::all()
           ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('latestproject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image_url' => 'required|image|max:6000',
            'project_name' => 'required|string|max:50',
            'description' => 'required|string|max:50000',
        ]);
    
        try {
            // Simpan data input dari form
            $data = $request->only([
                'image_url',
                'project_name',
                'description'
            ]);
    
            // Upload gambar form dan simpan di folder 'latestproject/Photos'
            $data['image_url'] = $request->file('image_url')->store('latestproject/Photos', 'public');
    
            // Simpan data proyek terbaru yang dimasukkan secara manual
            LatestProject::create($data);
    
            // Ambil data produk yang ditambahkan dalam 30 hari terakhir
            $recentProducts = ProductSellers::where('created_at', '>=', now()->subDays(30))->get();
    
            // Simpan setiap produk terbaru ke dalam tabel latest_project
            foreach ($recentProducts as $product) {
                LatestProject::create([
                    'project_name' => $product->product_name,
                    'description' => $product->description,
                    'image_url' => $product->image1_url, // Mengambil hanya gambar pertama
                ]);
            }
    
            return redirect()->route('latestproject.index')->with('success', 'New Best Latest Project Data added!');
        } catch (\Exception $e) {
            return redirect()->route('latestproject.index')->with('error', 'Failed to add data! ' . $e->getMessage());
        }
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
        // Ambil data produk berdasarkan ID
        $latestproject = LatestProject::findOrFail($id);

        // Kirim data ke view edit
        return view('latestproject.edit', compact('latestproject'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'project_name' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil data produk berdasarkan ID
        $latestproject = LatestProject::findOrFail($id);

        // Update data produk
        $latestproject->project_name = $request->input('project_name');
        $latestproject->description = $request->input('description');

        // Cek apakah ada file gambar baru yang diunggah
        if ($request->hasFile('image_url')) {
            // Hapus gambar lama jika ada
            if ($latestproject->image_url && file_exists(storage_path('app/public/' . $latestproject->image_url))) {
                unlink(storage_path('app/public/' . $latestproject->image_url));
            }

            // Simpan gambar baru
            $file = $request->file('image_url');
            $path = $file->store('images', 'public');
            $latestproject->image_url = $path;
        }

        // Simpan perubahan ke database
        $latestproject->save();

    return redirect('/latestproject')->with('success', 'Edit Product Saved!');

}

    /**
     * Remove the specified resource from storage.
     */
    public function hapuslatestproject(string $id)
    {
        $latestproject = LatestProject::find($id);
        if ($latestproject) {
            $latestproject->delete();
            return redirect('/latestproject')->with('success', 'Latest Project Deleted Successfully!');
        }
        return redirect('/latestproject')->with('error', 'Latest Project not found!');
    }
}
