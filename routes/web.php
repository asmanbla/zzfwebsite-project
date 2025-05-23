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
use App\Http\Controllers\BestProductController;
use App\Http\Controllers\LatestProjectController;
use App\Http\Controllers\ProdetLatestProjectController;
use App\Http\Controllers\LatestProjectViewController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Session;



 // Search Button Controller : 
 Route::get ('/product_search', [HomeBladeController::class,'product_search']);
 Route::get ('/product_search_purchase', [HomeBladeController::class,'product_search_purchase']);
 Route::get ('/product_search_rent', [HomeBladeController::class,'product_search_rent']);
 Route::get ('/product_search_all', [HomeBladeController::class,'product_search_all']);
 Route::get('/product_search_catalog', [HomeBladeController::class,'product_search_catalog']);

//  Tower Crane
 Route::get('/product_search_rent/tower_crane', [HomeBladeController::class, 'product_search_rent_tower_crane']);
 Route::get('/product_search_purchase/tower_crane', [HomeBladeController::class, 'product_search_purchase_tower_crane']);

//  Passenger Hoist
Route::get('/product_search_rent/passenger_hoist', [HomeBladeController::class, 'product_search_rent_passenger_hoist']);
Route::get('/product_search_purchase/passenger_hoist', [HomeBladeController::class, 'product_search_purchase_passenger_hoist']);

// Form Work
Route::get('/product_search_rent/form_work', [HomeBladeController::class, 'product_search_rent_form_work']);
Route::get('/product_search_purchase/form_work', [HomeBladeController::class, 'product_search_purchase_form_work']);

// Scaffolding

Route::get('/product_search_rent/scaffolding', [HomeBladeController::class, 'product_search_rent_scaffolding']);
Route::get('/product_search_purchase/scaffolding', [HomeBladeController::class, 'product_search_purchase_scaffolding']);

// Placing Boom

Route::get('/product_search_rent/placing_boom', [HomeBladeController::class, 'product_search_rent_placing_boom']);
Route::get('/product_search_purchase/placing_boom', [HomeBladeController::class, 'product_search_purchase_placing_boom']);

// Safety Net

Route::get('/product_search_rent/safety_net', [HomeBladeController::class, 'product_search_rent_safety_net']);
Route::get('/product_search_purchase/safety_net', [HomeBladeController::class, 'product_search_purchase_safety_net']);

// Concrete Pump

Route::get('/product_search_rent/concrete_pump', [HomeBladeController::class, 'product_search_rent_concrete_pump']);
Route::get('/product_search_purchase/concrete_pump', [HomeBladeController::class, 'product_search_purchase_concrete_pump']);

// Concrete Batching Plant

Route::get('/product_search_rent/concrete_batching_plant', [HomeBladeController::class, 'product_search_rent_concrete_batching_plant']);
Route::get('/product_search_purchase/concrete_batching_plant', [HomeBladeController::class, 'product_search_purchase_concrete_batching_plant']);

// Mobile Crane

Route::get('/product_search_rent/mobile_crane', [HomeBladeController::class, 'product_search_rent_mobile_crane']);
Route::get('/product_search_purchase/mobile_crane', [HomeBladeController::class,'product_search_purchase_mobile_crane']);


Route::resource('orderform', OrderFormController::class);
Route::resource('formrent', RentFormController::class);



//Produk Details View

Route::get('/detailproduklatest/{id}', [DetailProdukController::class, 'show'])->name('detailproduk.show');
Route::get('/produkdetailseller/{id}', [DetailProdukController::class, 'showseller'])->name('detailprodukseller.show');

// Route untuk menampilkan produk tipe 'purchase'
Route::get('/products/purchase', [ProductViewController::class, 'showProductPurchase'])->name('products.purchase');

// Route untuk menampilkan produk tipe 'rent'
Route::get('/products/rent', [ProductViewController::class, 'showProductRent'])->name('products.rent');

// Route untuk menampilkan semua produk tipe 'rent_and_purchase'
Route::get('/products/all', [ProductViewController::class, 'showProductAll'])->name('products.all');

// Route untuk menampilkan produk tipe barang category 'towecrane'
Route::get('/products/purchase/towercrane', [ProductViewController::class, 'showProductPurchaseTowerCrane'])->name('products.purchase');
Route::get('/products/rent/towercrane', [ProductViewController::class, 'showProductRentTowerCrane'])->name('products.rent');

// Route untuk menampilkan produk tipe barang category 'passengerhoist'
Route::get('/products/purchase/passengerhoist', [ProductViewController::class, 'showProductPurchasePassengerHoist'])->name('products.purchase');
Route::get('/products/rent/passengerhoist', [ProductViewController::class, 'showProductRentpassengerhoist'])->name('products.rent');

// Route untuk menampilkan produk tipe barang category 'formwork'
Route::get('/products/purchase/formwork', [ProductViewController::class, 'showProductPurchaseFormWork'])->name('products.purchase');
Route::get('/products/rent/formwork', [ProductViewController::class, 'showProductRentFormWork'])->name('products.rent');

// Route untuk menampilkan produk tipe barang category 'scaffolding'
Route::get('/products/purchase/scaffolding', [ProductViewController::class, 'showProductPurchaseScaffolding'])->name('products.purchase');
Route::get('/products/rent/scaffolding', [ProductViewController::class, 'showProductRentScaffolding'])->name('products.rent');

// Route untuk menampilkan produk tipe barang category 'scaffolding'
Route::get('/products/purchase/placingboom', [ProductViewController::class, 'showProductPurchasePlacingBoom'])->name('products.purchase');
Route::get('/products/rent/placingboom', [ProductViewController::class, 'showProductRentPlacingBoom'])->name('products.rent');

// Route untuk menampilkan produk tipe barang category 'scaffolding'
Route::get('/products/purchase/safetynet', [ProductViewController::class, 'showProductPurchaseSafetyNet'])->name('products.purchase');
Route::get('/products/rent/safetynet', [ProductViewController::class, 'showProductRentSafetyNet'])->name('products.rent');

// Route untuk menampilkan produk tipe barang category 'scaffolding'
Route::get('/products/purchase/concretepump', [ProductViewController::class, 'showProductPurchaseConcretePump'])->name('products.purchase');
Route::get('/products/rent/concretepump', [ProductViewController::class, 'showProductRentConcretePump'])->name('products.rent');

// Route untuk menampilkan produk tipe barang category 'scaffolding'
Route::get('/products/purchase/concretebatchingplant', [ProductViewController::class, 'showProductPurchaseConcreteBatchingPlant'])->name('products.purchase');
Route::get('/products/rent/concretebatchingplant', [ProductViewController::class, 'showProductRentConcreteBatchingPlant'])->name('products.rent');

// Route untuk menampilkan produk tipe barang category 'scaffolding'
Route::get('/products/purchase/mobilecrane', [ProductViewController::class, 'showProductPurchaseMobileCrane'])->name('products.purchase');
Route::get('/products/rent/mobilecrane', [ProductViewController::class, 'showProductRentMobileCrane'])->name('products.rent');


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
Route::get('client/{client}/edit', [ClientController::class, 'edit'])->name('client.edit');
Route::put('/client/{id}', [ClientController::class, 'update'])->name('client.update');

Route::resource('bestproduct', BestProductController::class);
Route::get('/hapusbestproduct/{id}', [BestProductController::class, 'hapusbestproduct'])->name('hapusbestproduct');
Route::get('/bestproduct/hapusbestproduct/{id}', [BestProductController::class, 'hapusbestproduct']);
Route::get('/bestproduct/{id}/edit', [BestProductController::class, 'edit'])->name('bestproduct.edit');
Route::put('/bestproduct/{id}', [BestProductController::class, 'update'])->name('bestproduct.update');


Route::resource('latestproject', LatestProjectController::class);
Route::get('/hapuslatestproject/{id}', [LatestProjectController::class, 'hapuslatestproject'])->name('hapuslatestproject');
Route::get('/latestproject/hapuslatestproject/{id}', [LatestProjectController::class, 'hapuslatestproject']);
Route::get('latestproject/{latestproject}/edit', [LatestProjectController::class, 'edit'])->name('latestproject.edit');
Route::put('/latestproject/{id}', [LatestProjectController::class, 'update'])->name('latestproject.update');

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

Route::middleware([Localization::class])->group(function () {
    Route::get('/', [HomeBladeController::class, 'index']); // Memanggil controller secara langsung
    Route::resource('aboutus', AboutUsController::class);
    Route::resource('catalog', CatalogController::class);
    Route::resource('/contactus', ContactController::class); 
    Route::resource('latestprojectview', LatestProjectViewController::class);
    Route::get('/product/{id}', [ProdetLatestProjectController::class, 'showproduct'])->name('product.show');
    Route::get('/detailproduklatest/{id}', [DetailProdukController::class, 'show'])->name('detailproduk.show');
Route::get('/produkdetailseller/{id}', [DetailProdukController::class, 'showseller'])->name('detailprodukseller.show');

    Route::get('locale/{locale}', function ($locale) {
        $validLocales = ['en', 'id'];
        if (in_array($locale, $validLocales)) {
            session(['locale' => $locale]);
        }
        return redirect()->back();
    })->name('locale');
});