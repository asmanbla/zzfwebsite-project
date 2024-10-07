<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserZZFController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SellerController;

Route::get('/', function () {
    return view('welcome');
});

// Route login 
Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
// Route::post('/customer/register', [CustomerRegisterController::class, 'register'])->name('register.register.post');

// Route register
Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
// Route::post('/customer/register', [CustomerRegisterController::class, 'register'])->name('register.register.post');

//Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home');

// Route USER ZZF
Route::resource('userzzf', UserZZFController::class);
// Route::post('/store', [UserZZFController::class, 'store'])->name('store');
// Route::get('/edit/{id}', [UserZZFController::class, 'edit'])->name('edit');
// Route::post('/update/{id}', [UserZZFController::class, 'update'])->name('update');
Route::get('/userzzf/destroy/{id}', [UserZZFController::class, 'destroy'])->name('userzzf.destroy');


// Route Customer 
Route::resource('customer', CustomerController::class);

// Route Seller 
Route::resource('seller', SellerController::class);