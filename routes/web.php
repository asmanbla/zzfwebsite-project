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
use App\Http\Controllers\OrdersellerController;
use App\Http\Controllers\SewasellerController;
use App\Http\Controllers\OrdetailsellerController;
use App\Http\Controllers\SewadetailsellerController;
use App\Http\Controllers\ProdrevsellerController;
use App\Http\Controllers\PaymentsellerController;



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
Route::get('/hapusorderzzf/{id}', [OrderZzfController::class, 'hapusorderzzf'])->name('hapusorderzzf');
Route::get('/orderzzf/hapusorderzzf/{id}', [OrderZzfController::class, 'hapusorderzzf']);

// Route Order Details ZZF
Route::resource('orderdetailszzf', OrderDetailsZzfController::class);
// Route::get('/orderdetailszzf/{orderdetailszzf}/edit', [OrderDetailsZzfController::class, 'edit'])->name('orderdetailszzf.edit');
Route::get('/hapusorderdetailszzf/{id}', [OrderDetailsZzfController::class, 'hapusorderdetailszzf'])->name('hapusorderdetailszzf');
Route::get('/orderdetailszzf/hapusorderdetailszzf/{id}', [OrderDetailsZzfController::class, 'hapusorderdetailszzf']);

// Route Sewa Zzf
Route::resource('sewazzf', SewaZzfController::class);
Route::get('/hapussewazzf/{id}', [SewaZzfController::class, 'hapussewazzf'])->name('hapussewazzf');
Route::get('/sewazzf/hapussewazzf/{id}', [SewaZzfController::class, 'hapussewazzf']);

// Route Sewa Details ZZF
Route::resource('sewadetailszzf', SewaDetailsZzfController::class);
Route::get('/hapussewadetailszzf/{id}', [SewaDetailsZzfController::class, 'hapussewadetailszzf'])->name('hapussewadetailszzf');
Route::get('/orderdetailszzf/hapussewadetailszzf/{id}', [SewaDetailsZzfController::class, 'hapussewadetailszzf']);

// Route Produk Reviews ZZF
Route::resource('produkreviewszzf', ProdukReviewZzfController::class);
Route::get('/hapuspreviewszzf/{id}', [ProdukReviewZzfController::class, 'hapuspreviewszzf'])->name('hapuspreviewszzf');
Route::get('/produkreviewszzf/hapuspreviewszzf/{id}', [ProdukReviewZzfController::class, 'hapuspreviewszzf']);

// Route Service Reviews ZZF
Route::resource('servicereviewszzf', ServiceReviewsZzfController::class);
Route::get('/hapussreviewszzf/{id}', [ServiceReviewsZzfController::class, 'hapussreviewszzf'])->name('hapussreviewszzf');
Route::get('/servicezzfreviews/hapussreviewszzf/{id}', [ServiceReviewsZzfController::class, 'hapussreviewszzf']);


//Dashboard seller
Route::resource('dashboardseller', App\Http\Controllers\DashboardSellerController::class);

Route::resource('procatseller', App\Http\Controllers\ProcatsellerController::class);
Route::get('/hapusprocatseller/{id}', [ProcatsellerController::class, 'hapusprocatseller'])->name('hapusprocatseller');
Route::get('/procatseller/hapusprocatseller/{id}', [ProcatsellerController::class, 'hapusprocatseller']);

Route::resource('produkseller', App\Http\Controllers\ProduksellerController::class);
Route::get('/hapusprodukseller/{id}', [ProduksellerController::class, 'hapusprodukseller'])->name('hapusprodukseller');
Route::get('/produkseller/hapusprodukseller/{id}', [ProduksellerController::class, 'hapusprodukseller']);
Route::put('/produkseller/{id}', [ProduksellerController::class, 'update'])->name('produkseller.update');

Route::resource('orderseller', App\Http\Controllers\OrdersellerController::class);

Route::resource('sewaseller', App\Http\Controllers\SewasellerController::class);
Route::resource('ordetailseller', App\Http\Controllers\OrdetailsellerController::class);
Route::resource('sewadetailseller', App\Http\Controllers\sewadetailsellerController::class);
Route::resource('paymentorderseller', App\Http\Controllers\PaymentsewasellerController::class);
Route::resource('paymentsewaseller', App\Http\Controllers\PaymentsellerController::class);
Route::resource('prodrevseller', App\Http\Controllers\ProdrevsellerController::class);