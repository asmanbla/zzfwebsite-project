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
