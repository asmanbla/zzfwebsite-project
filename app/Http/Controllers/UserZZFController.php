<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserZZFController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('userzzf.index', [
            'pengguna' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('userzzf.create', [
            'users' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('/userzzf')->with('sukses', 'New User Added!');
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
        // Menampilkan Form Edit
        $user = User::find($id);
        if (!$user) return redirect()->route('userzzf.index'); // Perbaiki redirect jika user tidak ditemukan
        return view('userzzf.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mengedit Data User
        $users = User::find($id);
        if (!$users) return redirect('/userzzf')->with('error', 'User not found!'); // Tambahkan pengecekan jika user tidak ditemukan

        $users->name = $request->name;
        $users->email = $request->email;
        if ($request->password) $users->password = bcrypt($request->password);
        $users->roles = $request->roles;
        $users->save();
        
        return redirect('/userzzf')->with('sukses', 'Edit User Saved!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapususer($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect('/userzzf')->with('sukses', 'User Deleted Successfully!');
        }
        return redirect('/userzzf')->with('error', 'User not found!');
    }
}
