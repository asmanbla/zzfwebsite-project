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
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentsewasellerController;
use App\Http\Controllers\OrderZzfController;
use App\Http\Controllers\OrderDetailsZzfController;
use App\Http\Controllers\SewaZzfController;
use App\Http\Controllers\SewaDetailsZzfController;
use App\Http\Controllers\ProdukReviewZzfController;
use App\Http\Controllers\ServiceReviewsZzfController;
use App\Http\Controllers\PaymentOrdersZzfController;
use App\Http\Controllers\PaymentSewasZzfController;
use App\Http\Controllers\DashProfileController;
use App\Http\Controllers\ProfileCustController;
use App\Http\Controllers\DashProfileSellerController;
use App\Http\Controllers\HomeBladeController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartHomeController;
use App\Http\Controllers\OrderPageController;
use App\Http\Controllers\ProductViewController;
use App\Http\Controllers\CheckoutViewController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\OrderdetailsellerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\OrderFormController;
use App\Http\Controllers\RentFormController;
use App\Http\Controllers\CatalogController;


Route::resource('/', HomeBladeController::class);
Route::resource('/contactus', ContactController::class);
 // Search Button Controller : 
 Route::get ('/product_search', [HomeBladeController::class,'product_search']);
 Route::get ('/product_search_purchase', [HomeBladeController::class,'product_search_purchase']);
 Route::get ('/product_search_rent', [HomeBladeController::class,'product_search_rent']);
 Route::get ('/product_search_all', [HomeBladeController::class,'product_search_all']);
 Route::get('/product_search_catalog', [HomeBladeController::class,'product_search_catalog']);


Route::resource('aboutus', AboutUsController::class);
Route::resource('orderform', OrderFormController::class);
Route::resource('formrent', RentFormController::class);
Route::resource('catalog', CatalogController::class);


//Produk Details View

Route::get('/produkdetails/{id}', [DetailProdukController::class, 'show'])->name('detailproduk.show');
Route::get('/produkdetailseller/{id}', [DetailProdukController::class, 'showseller'])->name('detailprodukseller.show');

// Route untuk menampilkan produk tipe 'purchase'
Route::get('/products/purchase', [ProductViewController::class, 'showProductPurchase'])->name('products.purchase');

// Route untuk menampilkan produk tipe 'rent'
Route::get('/products/rent', [ProductViewController::class, 'showProductRent'])->name('products.rent');

// Route untuk menampilkan semua produk tipe 'rent_and_purchase'
Route::get('/products/all', [ProductViewController::class, 'showProductAll'])->name('products.all');

// Route login 
// Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
// Route::post('/customer/register', [CustomerRegisterController::class, 'register'])->name('register.register.post');

// Route register
// Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
// Route::post('/customer/register', [CustomerRegisterController::class, 'register'])->name('register.register.post');

Route::middleware(['auth'])->group(function () {

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
Route::resource('produkall', ProductZzfController::class);
Route::get('/hapusprodukall/{id}', [ProductZzfController::class, 'hapusprodukall'])->name('hapusprodukall');
Route::get('/produkall/hapusprodukall/{id}', [ProductZzfController::class, 'hapusprodukall']);

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

// Route Payment Order ZZF
Route::resource('paymentorderszzf', PaymentOrdersZzfController::class);
Route::get('/hapuspaymentorderszzf/{id}', [PaymentOrdersZzfController::class, 'hapuspaymentorderszzf'])->name('hapuspaymentorderszzf');
Route::get('/paymentorderszzf/hapuspaymentorderszzf/{id}', [PaymentOrdersZzfController::class, 'hapuspaymentorderszzf']);

// Route Payment Sewa ZZF
Route::resource('paymentsewaszzf', PaymentSewasZzfController::class);
Route::get('/hapuspaymentsewaszzf/{id}', [PaymentSewasZzfController::class, 'hapuspaymentsewaszzf'])->name('hapuspaymentsewaszzf');
Route::get('/paymentsewaszzf/hapuspaymentsewaszzf/{id}', [PaymentSewasZzfController::class, 'hapuspaymentsewaszzf']);

Route::resource('cart', CartController::class);

Route::resource('client', ClientController::class);
Route::get('/hapusclient/{id}', [ClientController::class, 'hapusclient'])->name('hapusclient');
Route::get('/client/hapusclient/{id}', [ClientController::class, 'hapusclient']);

// DASHPROFILE 
Route::resource('dashprofilezzf', App\Http\Controllers\DashProfileController::class);

Route::get('/dashboard', function () {
    return view('dashboard.home'); // Ganti dengan view dashboard admin yang sesuai
})->name('admin.dashboard');

});

Route::middleware(['auth:sellers'])->group(function () {
    Route::get('/dashboardseller', function () {
        return view('dashboardseller.home'); 
    })->name('seller.dashboard');
    //DASHBOARD SELLER
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
Route::resource('payment', App\Http\Controllers\PaymentController::class);
Route::resource('paymentsewaseller', App\Http\Controllers\PaymentsewasellerController::class);
Route::resource('prodrevseller', App\Http\Controllers\ProdrevsellerController::class);

// DASHPROFILE SELLER 
Route::resource('dashprofileseller', App\Http\Controllers\DashProfileSellerController::class);

});

// Route Halaman Customer 
Route::middleware(['auth:customers'])->group(function () {
    Route::get('/cartpage', [CartHomeController::class, 'index'])->name('carthome.index'); // Menampilkan halaman cart

    // Route untuk menambahkan produk dari products_zzfs
    Route::post('/cart/add/product/{id}', [CartHomeController::class, 'addToCart'])->name('cart.addToCart'); // Menambahkan item ke cart (products_zzfs)
    
   // Route untuk menambahkan produk dari product_sellers berdasarkan harga purchase
    Route::post('/cart/add/seller/purchase/{id}', [CartHomeController::class, 'addToCartPurchase'])->name('cart.addToCartPurchase'); 

    // Route untuk menambahkan produk dari product_sellers berdasarkan harga rent
    Route::post('/cart/add/seller/rent/{id}', [CartHomeController::class, 'addToCartRent'])->name('cart.addToCartRent');

    Route::post('/cart/updateQuantity/{id}', [CartHomeController::class, 'updateQuantity'])->name('cart.updateQuantity');

    // Route::delete('/cart/remove/{id}', [CheckoutViewController::class, 'destroy'])->name('carthome.destroy');
    Route::get('/hapuscart/{id}', [CartHomeController::class, 'hapuscart'])->name('hapuscart');

    // Route Halaman Checkout 
    Route::get('/checkout', [CheckoutViewController::class, 'index'])->name('checkout.index'); // Menampilkan halaman Checkout

    Route::post('/checkout/store', [CheckoutViewController::class, 'store'])->name('checkout.store');

    Route::post('/checkoutprocess/store', [CheckoutViewController::class, 'storecheckout'])->name('checkoutprocess.store');

    Route::get('/history', [HistoryController::class, 'index'])->name('history.index');

    Route::get('/download-receipt-orders/{id}', [HistoryController::class, 'downloadReceiptOrder'])->name('downloadReceiptOrder');

    Route::get('/download-receipt-sewa/{id}', [HistoryController::class, 'downloadReceiptSewa'])->name('downloadReceiptSewa');


 // Menghapus item dari cart

    // Route::resource('orderpage', OrderPageController::class);
    // // Route untuk menyimpan data ke tabel orders atau sewas
    // Route::post('/orderpage/store', [OrderPageController::class, 'storezzf'])->name('orderpage.storezzf');

    // Route::resource('prodview', ProductViewController::class);
});



// Route Login Register 

/// Logout
Route::post('/logout', function () {
    Auth::logout();
    session()->flash('status', 'Logout Berhasil');
    return redirect('/login');
})->name('logout');

// Logout Customer
Route::post('/customer/logout', function () {
    Auth::guard('customers')->logout();
    session()->flash('status', 'Logout Berhasil');
    return redirect('/');
})->name('logoutcustomer');

// Logout Seller
Route::post('/sellers/logout', function () {
    Auth::guard('sellers')->logout();
    session()->flash('status', 'Logout Berhasil');
    return redirect('/login');
})->name('logoutsellers');

// Route untuk menampilkan halaman login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk melakukan login
Route::post('loginproses', [AuthController::class, 'loginproses'])->name('loginproses');

// Route untuk menampilkan halaman registrasi seller
Route::get('register', [AuthController::class, 'showSellerRegister'])->name('showSellerRegister');
Route::post('/register', [AuthController::class, 'sellerRegister'])->name('auth.sellerRegister');

// Route untuk menampilkan halaman registrasi customer
Route::get('registercustomer', [AuthController::class, 'showCustomerRegister'])->name('showCustomerRegister');
Route::post('/registercustomer', [AuthController::class, 'customerRegister'])->name('auth.customerRegister');

// Route Middleware Untuk Halaman Home
Route::group(['middleware' => 'auth:customers'], function () {
    Route::resource('custprofile', App\Http\Controllers\ProfileCustController::class);
});