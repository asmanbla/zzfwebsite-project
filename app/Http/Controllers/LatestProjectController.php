<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LatestProject;

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
            $data = $request->only([
                'image_url',
                'project_name',
                'description'
            ]);
    
            $data['image_url'] = $request->file('image_url')->store('latestproject/Photos', 'public');

            // Simpan data produk ke database
            $latestproject = LatestProject::create($data);
    
            return redirect()->route('latestproject.index')->with('success', 'New Best Latest Project Data added!');
        } catch (\Exception $e) {
            dd($e->getMessage());  // Menampilkan pesan error untuk debugging
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
