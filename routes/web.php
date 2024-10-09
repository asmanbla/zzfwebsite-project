<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardsellerController;
use App\Http\Controllers\UserZZFController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProcatsellerController;
use App\Http\Controllers\ProduksellerController;
use App\Http\Controllers\ProductCategoriZzfController;
use App\Http\Controllers\ProductZzfController;
use App\Http\Controllers\OrderZzfController;

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
Route::get('/hapususer/{id}', [UserZZFController::class, 'hapususer'])->name('hapususer');
Route::get('/user/hapususer/{id}', [UserZZFController::class, 'hapususer']);


// Route Customer 
Route::resource('customer', CustomerController::class);
Route::get('customer/{customer}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::get('/hapuscust/{id}', [CustomerController::class, 'hapuscust'])->name('hapuscust');
Route::get('/customer/hapuscust/{id}', [CustomerController::class, 'hapuscust']);

// Route Seller 
Route::resource('seller', SellerController::class);
Route::get('/hapusseller/{id}', [SellerController::class, 'hapusseller'])->name('hapusseller');
Route::get('/seller/hapusseller/{id}', [SellerController::class, 'hapusseller']);

// Route Product Categories
Route::resource('prodcatzzf', ProductCategoriZzfController::class);
Route::put('/prodcatzzf/{category}', [ProductCategoriZzfController::class, 'update'])->name('prodcatzzf.update');
Route::get('/hapusprodcatzzf/{id}', [ProductCategoriZzfController::class, 'hapusprodcatzzf'])->name('hapusprodcatzzf');
Route::get('/prodcat/hapusprodcatzzf/{id}', [ProductCategoriZzfController::class, 'hapusprodcatzzf']);

// Route Product 
Route::resource('produkzzf', ProductZzfController::class);
Route::get('/hapusprodukzzf/{id}', [ProductZzfController::class, 'hapusprodukzzf'])->name('hapusprodukzzf');
Route::get('/produkzzf/hapusprodukzzf/{id}', [ProductZzfController::class, 'hapusprodukzzf']);

// Route Orders ZZF 
Route::resource('orderzzf', OrderZzfController::class);


//Dashboard seller
Route::resource('dashboardseller', App\Http\Controllers\DashboardSellerController::class);

Route::resource('procatseller', App\Http\Controllers\ProcatsellerController::class);
Route::get('/hapusprocatseller/{id}', [ProcatsellerController::class, 'hapusprocatseller'])->name('hapusprocatseller');
Route::get('/procatseller/hapusprocatseller/{id}', [ProcatsellerController::class, 'hapusprocatseller']);

Route::resource('produkseller', App\Http\Controllers\ProduksellerController::class);
Route::get('/hapusprodukseller/{id}', [ProduksellerController::class, 'hapusprodukseller'])->name('hapusprodukseller');
Route::get('/produkseller/hapusprodukseller/{id}', [ProduksellerController::class, 'hapusprodukseller']);
Route::put('/produkseller/{id}', [ProduksellerController::class, 'update'])->name('produkseller.update');


