<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User; 
use App\Models\Sellers; 
use App\Models\Customers; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Untuk hash

class AuthController extends Controller
{
    // Metode untuk menampilkan halaman login
    public function showLoginForm() {
        return view('auth.login'); // Pastikan ada view login yang sesuai
    }

    public function loginproses(Request $request)
{
    // Validasi input dari pengguna
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    $credentials = $request->only('email', 'password');

    // Cek di tabel userzzf
    $users = User::where('email', $credentials['email'])->first();
    if ($users && $users->password === $credentials['password']) {
        Auth::login($users);
        return redirect('/dashboard')->with('sukses', 'Selamat datang di dashboard Admin Kami!');
    }

    // Cek di tabel sellers
    $sellers = Sellers::where('email', $credentials['email'])->first();
    if ($sellers && $sellers->password === $credentials['password']) {
        Auth::guard('sellers')->login($sellers);
        return redirect('/dashboardseller')->with('sukses', 'Selamat datang di dashboard Seller!');
    }

    // Cek di tabel customers
    $customers = Customers::where('email', $credentials['email'])->first();
    if ($customers && $customers->password === $credentials['password']) {
        Auth::guard('customers')->login($customers);
        return redirect('/')->with('sukses', 'Selamat datang di Halaman Website Kami!');
    }

    // Jika tidak ditemukan, arahkan kembali ke halaman login
    return redirect()->route('login')->withInput($request->only('email'))->withErrors([
        'email' => 'Email atau Password yang dimasukkan tidak cocok.',
    ]);
}

    
    // Metode untuk menampilkan halaman login
    public function showSellerRegister() {
        return view('auth.register'); // Pastikan ada view login yang sesuai
    }

    // Metode untuk registrasi Seller (jika diperlukan)
    public function sellerRegister(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:sellers,email',
            'password' => 'required|string|min:2',
        ]);
    
        // Membuat Seller baru
        Sellers::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, // Mengamankan password
        ]);
    
        return redirect('/login')->with('sukses', 'Registration successful! Please log in.'); // Redirect ke login
    }

    // Metode untuk menampilkan halaman login
    public function showCustomerRegister() {
        return view('auth.registercust'); // Pastikan ada view login yang sesuai
    }

    public function customerRegister(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:sellers,email',
            'password' => 'required|string|min:2',
            'phone' => 'required|',
            'address1' => 'required|',
            'address2' => 'required|',
        ]);
    
        // Membuat Seller baru
        Customers::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, // Mengamankan password
            'phone' => $request->phone,
            'address1' => $request->address1,
            'address2' => $request->address2,
        ]);
    
        return redirect('/login')->with('sukses', 'Registration successful! Please log in.'); // Redirect ke login
    }
    

}