<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('client.index', [
            'clientzzf' => Client::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }
    /**
     * Display the specified resource.
     */
    public function store(Request $request)
{
    $request->validate([
        'logo_url' => 'required|image|max:6000',
        'company_name' => 'required|string|max:50',
        'documentation_url' => 'nullable|image|max:6000',
        'description' => 'required|string|max:50000',
    ]);

    try {
        $data = $request->only([
            'company_name',
            'description'
        ]);

        $data['logo_url'] = $request->file('logo_url')->store('client/Photos', 'public');

        if ($request->hasFile('documentation_url')) {
            $data['documentation_url'] = $request->file('documentation_url')->store('client/Photos', 'public');
        }

        // Simpan data produk ke database
        $client = Client::create($data);

        return redirect()->route('client.index')->with('success', 'New Client Data added!');
    } catch (\Exception $e) {
        dd($e->getMessage());  // Menampilkan pesan error untuk debugging
    }
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Ambil data produk berdasarkan ID
        $client = Client::findOrFail($id);

        // Kirim data ke view edit
        return view('client.edit', compact('client'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'company_name' => 'required|string|max:255',
            'description' => 'required|string',
            'logo_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'documentation_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil data produk berdasarkan ID
        $client = Client::findOrFail($id);

        // Update data produk
        $client->company_name = $request->input('company_name');
        $client->description = $request->input('description');

        // Cek apakah ada file gambar baru yang diunggah
        if ($request->hasFile('logo_url')) {
            // Hapus gambar lama jika ada
            if ($client->logo_url && file_exists(storage_path('app/public/' . $client->logo_url))) {
                unlink(storage_path('app/public/' . $client->logo_url));
            }

            // Simpan gambar baru
            $file = $request->file('logo_url');
            $path = $file->store('logo', 'public');
            $client->logo_url = $path;
        }

         // Cek apakah ada file gambar baru yang diunggah
         if ($request->hasFile('documentation_url')) {
            // Hapus gambar lama jika ada
            if ($client->documentation_url && file_exists(storage_path('app/public/' . $client->documentation_url))) {
                unlink(storage_path('app/public/' . $client->documentation_url));
            }

            // Simpan gambar baru
            $file = $request->file('documentation_url');
            $path = $file->store('documentation', 'public');
            $client->documentation_url = $path;
        }

        // Simpan perubahan ke database
        $client->save();

    return redirect('/client')->with('success', 'Edit Product Saved!');

}

    /**
     * Remove the specified resource from storage.
     */
    public function hapusclient(string $id)
    {
        $client = Client::find($id);
        if ($client) {
            $client->delete();
            return redirect('/client')->with('success', 'client Deleted Successfully!');
        }
        return redirect('/client')->with('error', 'Client not found!');
    }
}
