<!DOCTYPE html>
<html lang="en">

    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <meta charset="utf-8">
        <title>ZZF Industri - Home Page</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
       
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Logo Website-->
        <link rel="icon" type="image/x-icon" href="img/imgzzf/logo.png" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template File CSS -->
        <link href="css/style.css" rel="stylesheet">
<style>
    .categories-img img {
        height: 250px; /* Atur tinggi gambar sesuai keinginan */
        object-fit: cover; /* Agar gambar tetap proporsional dan tidak terdistorsi */
        width: 100%; /* Lebar gambar diatur penuh agar mengikuti ukuran kolom */
    }

.categories-img img {
    height: 250px; /* Atur tinggi gambar sesuai keinginan */
    object-fit: cover; /* Agar gambar tetap proporsional dan tidak terdistorsi */
    width: 100%; /* Lebar gambar diatur penuh agar mengikuti ukuran kolom */
}

    a.btn {
        display: inline-block; /* Atur sebagai inline-block agar dapat diberi margin */
        margin-bottom: 10px;/* Atur jarak bawah pada tombol pertama */
    }

    a.btn {
        margin-right: 10px; /* Jarak horizontal antar tombol */
    }

    a.btn.btn-secondary {
        border-radius: 8px !important; /* Lekukan kecil dengan prioritas tinggi */
        padding: 12px 24px !important; /* Ukuran padding agar berbentuk persegi panjang */
        display: inline-block; /* Pastikan tombol tetap inline */
    }

    .custom-btn2 {
            background-color: #050436; /* Warna biru */
            color: white; /* Warna font putih */
            border: none; /* Menghilangkan border default */
            border-radius: 20px; /* Sudut sedikit bulat */
            padding: 10px 20px; /* Ruang di dalam tombol */
            transition: box-shadow 0.3s ease; /* Transisi untuk efek bayangan */
        }


        .footer {
   
    text-align: center; /* Teks di tengah */
}

.footer .container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.footer-item a {
    color: #fff;
    text-decoration: none;
    margin-bottom: 8px;
    display: block;
}

.footer-item a:hover {
    color: #ddd; /* Warna teks saat hover */
}

.footer .container .row {
    justify-content: center;
}

.footer .col-md-6 {
    text-align: left;
}

.custom-btn2 {
            background-color: #050436; /* Warna biru */
            color: white; /* Warna font putih */
            border: none; /* Menghilangkan border default */
            border-radius: 10px; /* Sudut sedikit bulat */
            padding: 10px 20px; /* Ruang di dalam tombol */
            transition: box-shadow 0.3s ease; /* Transisi untuk efek bayangan */
        }

/* Atur ulang padding dan font-size untuk semua tombol agar seragam */
.custom-btn3, .custom-btn4, .contact-seller {
    padding: 10px 20px; /* Pastikan padding seragam */
    font-size: 14px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px; /* Jarak antara ikon dan teks */
    height: 40px; /* Pastikan tinggi seragam */
    border: none;
    transition: background-color 0.3s ease;
}

/* Warna dan background untuk tombol masing-masing */
.custom-btn3 {
    background-color: #475054; /* Warna biru */
    color: white;
}

.custom-btn4 {
    background-color: #6c757d; /* Warna background */
    color: #ffffff;
}

.contact-seller {
    background-color: #28a745; /* Warna hijau */
    color: #fff;
}

/* Hover efek untuk tombol Contact Seller */
.contact-seller:hover {
    background-color: #218838; /* Hijau lebih gelap saat hover */
}

/* Style untuk search bar */
.search-container {
    display: flex;
    justify-content: center; /* Mengatur agar elemen berada di tengah */
    margin-bottom: 20px; /* Jarak bawah */
}

.search-form {
    display: flex; /* Mengatur agar input dan button berada dalam satu baris */
    border: 2px solid #b22222; /* Warna border merah tua */
    border-radius: 30px; /* Membuat sudut rounded */
    overflow: hidden; /* Menyembunyikan bagian yang melebihi sudut */
    width: 80%; /* Mengatur lebar search bar, bisa disesuaikan */
    max-width: 600px; /* Lebar maksimal */
}

.search-input {
    border: none; /* Menghilangkan border default */
    padding: 10px 20px; /* Jarak dalam input */
    outline: none; /* Menghilangkan outline saat input terpilih */
    flex: 1; /* Membuat input mengisi ruang yang tersedia */
    font-size: 16px; /* Ukuran font */
    border-radius: 30px 0 0 30px; /* Rounded pada kiri */
}

.search-input::placeholder {
    color: #aaa; /* Warna placeholder */
}

.search-button {
    background-color: #b22222; /* Warna latar belakang merah tua */
    border: none; /* Menghilangkan border default */
    color: white; /* Warna teks */
    padding: 10px 15px; /* Jarak dalam button */
    cursor: pointer; /* Menampilkan pointer saat hover */
    transition: background-color 0.3s; /* Efek transisi pada hover */
    border-radius: 0 30px 30px 0; /* Rounded pada kanan */
}

.search-button:hover {
    background-color: #8b0000; /* Warna latar belakang lebih gelap saat hover */
}

<style>
/* Style untuk kotak layanan persegi panjang melebar ke samping */
.custom-service-item {
    width: 100%;
    height: 100px; /* Ukuran persegi panjang melebar ke samping */
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.row.g-4.d-flex.justify-content-center {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Layout 3 kolom */
    gap: 20px; /* Jarak antar kotak */
}

@media (max-width: 768px) {
    .row.g-4.d-flex.justify-content-center {
        grid-template-columns: repeat(1, 1fr); /* Satu kolom pada layar kecil */
    }
}

@media (min-width: 768px) and (max-width: 992px) {
    .row.g-4.d-flex.justify-content-center {
        grid-template-columns: repeat(2, 1fr); /* Dua kolom pada tablet */
    }
}
</style>

    </head>

    <body>

        <!-- Website Start (Preload) -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
            <div class="container">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap text-white">
                            <a href="https://maps.app.goo.gl/Pi63CAbYZseqwskv8" class="text-white me-4"><i class="fas fa-map-marker-alt text-white me-2"></i>ZZF's Office</a>
                            <a href="tel:+62 818-961-343" class="text-white me-4"><i class="fas fa-phone-alt text-white me-2"></i>+62 818-961-343</a>
                            <a href="mailto:asmanabila03@gmail.com" class="text-white me-0"><i class="fas fa-envelope text-white me-2"></i>asmanabila03@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

      <!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="" class="navbar-brand p-0">
                <h1 class="display-6 text-primary"><i class="fas fa-hard-hat me-3"></i>ZZF Industry</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#produk" class="nav-item nav-link">Product</a>
                    <a href="#tentang" class="nav-item nav-link">About</a>
                    <a href="#keunggulan" class="nav-item nav-link">Speciality</a>
                    <a href="#service" class="nav-item nav-link">Service</a>
                    <a href="#kontak" class="nav-item nav-link">Contact</a>
                </div>

                <a href="/registercustomer" class="btn btn-primary rounded-pill py-2 px-4">Shopping </a>
                <a href="/dashboardseller" class="btn btn-secondary rounded-pill py-2 px-4">Start Selling</a>

                <!-- Dropdown -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> <!-- Ikon profil -->
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @auth('customers') <!-- Menggunakan guard 'customer' -->
                            <li>
                                <a class="dropdown-item" href="/custprofile">
                                    {{ Auth::guard('customers')->user()->name }} - Customers
                                </a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <form action="{{ route('logoutcustomer') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        @else
                            <li><a class="dropdown-item" href="/login">Login</a></li>
                        @endauth
                    </ul>
                </div>
                <a href="/cartpage" class="nav-link position-relative me-3">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ isset($totalItems) && $totalItems > 0 ? $totalItems : 0 }} <!-- Menampilkan jumlah item keranjang -->
                    </span>
                </a>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar & Hero End -->


<!-- Carousel Start -->
<div class="header-carousel" id="home">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-wrap="true">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/imgzzf/bg2.jpg" class="img-fluid w-100" alt="First slide"/>
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                <!-- Services Start -->
                                <div class="container-fluid service py-5" id="service">
                                    <div class="container py-5">
                                        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                                            <h1 class="display-5 text-capitalize mb-3">Type Of <span class="text-primary">Services</span></h1>
                                            <p class="mb-0">Choose According to your needs</p>
                                        </div>
                                        <div class="row g-4 d-flex justify-content-center service-grid">
                                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="service-item custom-service-item p-4 border">
                                                    <div class="service-icon mb-4 text-center">
                                                        <i class="fa fa-truck fa-2x"></i>
                                                    </div>
                                                    <h5 class="mb-3 text-center">Heavy Equipment Sales</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                                                <div class="service-item custom-service-item p-4 border">
                                                    <div class="service-icon mb-4 text-center">
                                                        <i class="fa fa-tools fa-2x"></i>
                                                    </div>
                                                    <h5 class="mb-3 text-center">Heavy Equipment Rental</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                                                <div class="service-item custom-service-item p-4 border">
                                                    <div class="service-icon mb-4 text-center">
                                                        <i class="fa fa-cogs fa-2x"></i>
                                                    </div>
                                                    <h5 class="mb-3 text-center">Component Rental</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.7s">
                                                <div class="service-item custom-service-item p-4 border">
                                                    <div class="service-icon mb-4 text-center">
                                                        <i class="fa fa-box fa-2x"></i>
                                                    </div>
                                                    <h5 class="mb-3 text-center">Component Sales</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.9s">
                                                <div class="service-item custom-service-item p-4 border">
                                                    <div class="service-icon mb-4 text-center">
                                                        <i class="fa fa-tags fa-2x"></i>
                                                    </div>
                                                    <h5 class="mb-3 text-center">Bundling Sales</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-4 wow fadeInUp" data-wow-delay="1.1s">
                                                <div class="service-item custom-service-item p-4 border">
                                                    <div class="service-icon mb-4 text-center">
                                                        <i class="fa fa-box-open fa-2x"></i>
                                                    </div>
                                                    <h5 class="mb-3 text-center">Bundling Rental</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Services End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

        </div>
    </div>
</div>
<!-- Carousel End -->
         <br>
<!-- 
   Product Search -->
   <!-- <div class="search-container">
                <form action="{{ url('product_search') }}" method="GET" class="search-form">
                    <input class="search-input" type="text" name="search" placeholder="Search Products Here">
                    <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <br> -->


<!-- Product For Sale -->
<!-- <div class="container-fluid categories pb-5" id="produk">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">For Sale <span class="text-primary">Product</span></h1>
            <p class="mb-0">The Following are the Product for Sale</p>
        </div>
        <div class="categories-carousel owl-carousel">
            @foreach($productsForSale as $product)
                <div class="categories-item p-6">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="{{ asset('storage/' . $product->image1_url) }}" class="img-fluid w-100 rounded-top" alt="{{ $product->product_name }}">
                        </div> -->
                        <!-- <div class="categories-content rounded-bottom p-4">
                            <h4>{{ $product->product_name }}</h4>
                            <h6 class="text-secondary">
                                <i class="fa fa-user"></i> {{ $product->name }}
                            </h6>
                            <h8 class="text-secondary">
                                <i class="fa fa-cogs"></i> {{ $product->specification }}
                            </h8>
                            <br><br>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Rp{{ number_format($product->purchase_price, 2, ',', '.') }}</h4>
                            </div> -->
                            <!-- <a href="{{ route('detailprodukseller.show', $product->id) }}" class="btn btn-primary rounded-pill d-flex justify-content-center py-3 mb-3">Detail</a> -->
                            <!-- Button Section -->
                            <!-- <form action="{{ route('cart.addToCartPurchase', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <div style="display: flex; justify-content: center; gap: 10px;"> Flexbox for button alignment -->
                                    <!-- <button type="submit" class="btn custom-btn4">Purchase</button>
                                    <a href="https://wa.me/{{ $product->phone }}" class="btn btn-success contact-seller" target="_blank" style="height: 100%;"> Menambahkan btn-success untuk warna hijau -->
                                        <!-- <i class="fab fa-whatsapp"></i> Contact Seller
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br> -->
        <!-- <a href="/products/purchase" target="_blank" class="btn custom-btn2" style="margin-right: 15px !important;">More Purchase Product</a>
    </div>
</div> -->


<!-- Product For Rent -->
<!-- <div class="container-fluid categories pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">For Rent <span class="text-primary">Products</span></h1>
            <p class="mb-0">The Following are the Product for Rent</p>
        </div> -->
        <!-- <div class="categories-carousel owl-carousel">
            @foreach($productsForRent as $product)
                <div class="categories-item p-6">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="{{ asset('storage/' . $product->image1_url) }}" class="img-fluid w-100 rounded-top" alt="{{ $product->product_name }}">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4>{{ $product->product_name }}</h4>
                            <h6 class="text-secondary">
                                <i class="fa fa-user"></i> {{ $product->name }}
                            </h6>
                            <h8 class="text-secondary">
                                <i class="fa fa-cogs"></i> {{ $product->specification }}
                            </h8> -->
                            <!-- <br><br>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Rp{{number_format($product->rent_price, 2, ',', '.') }}/Day</h4>
                            </div>
                            <a href="{{ route('detailprodukseller.show', $product->id) }}" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Detail</a> -->
                            <!-- Button Section -->
                            <!-- <form action="{{ route('cart.addToCartRent', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="quantity" value="1"> -->
                                <!-- <div style="display: flex; justify-content: center; gap: 10px;"> Flexbox for button alignment -->
                                    <!-- <button type="submit" class="btn custom-btn3">Rent</button>
                                    <a href="https://wa.me/{{ $product->phone }}" class="btn btn-success contact-seller" target="_blank" style="height: 100%;"> Menambahkan btn-success untuk warna hijau -->
                                        <!-- <i class="fab fa-whatsapp"></i> Contact Seller
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <a href="/products/rent" target="_blank" class="btn custom-btn2" style="margin-right: 15px !important;">More Rent Products</a>
    </div>
</div> -->

<!-- <div class="container-fluid categories pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">For Rent and Sale <span class="text-primary">Products</span></h1>
            <p class="mb-0">The Following are the Product for Rent and Sale</p>
        </div> -->
        <!-- <div class="categories-carousel owl-carousel">
            @foreach($productsForAll as $product)
                <div class="categories-item p-6">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="{{ asset('storage/' . $product->image1_url) }}" class="img-fluid w-100 rounded-top" alt="{{ $product->product_name }}">
                        </div> -->
                        <!-- <div class="categories-content rounded-bottom p-4">
                            <h4>{{ $product->product_name }}</h4>
                            <h6 class="text-secondary">
                                <i class="fa fa-user"></i> {{ $product->name }}
                            </h6>
                            <h8 class="text-secondary">
                                <i class="fa fa-cogs"></i> {{ $product->specification }}
                            </h8>
                            <br><br>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Rp{{ number_format($product->rent_price, 2, ',', '.') }}/Day</h4>
                            </div>
                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Rp{{ number_format($product->purchase_price, 2, ',', '.') }}</h4>
                            </div> -->
                            <!-- <a href="{{ route('detailprodukseller.show', $product->id) }}" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Detail</a> -->
                            <!-- Flexbox untuk menyusun tombol -->
                            <!-- <div style="display: flex; justify-content: center; gap: 10px; margin-top: 10px;">
                                <form action="{{ route('cart.addToCartPurchase', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit" class="btn custom-btn4">Purchase</button>
                                </form>
                                <form action="{{ route('cart.addToCartRent', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit" class="btn custom-btn3">Rent</button>
                                </form>
                                <a href="https://wa.me/{{ $product->phone }}" class="btn btn-success contact-seller" target="_blank">
                                    <i class="fab fa-whatsapp"></i> Contact Seller
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <a href="/products/all" target="_blank" class="btn custom-btn2" style="margin-right: 15px !important;">More Purchase and Rent Products</a>
    </div>
</div> -->

        <!-- About Start -->
        <div class="container-fluid overflow-hidden about py-5" id="tentang">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-item">
                    <div class="pb-5">
                        <h1 class="display-5 text-capitalize">About <span class="text-primary">Us</span></h1>
                        <p class="mb-0">
                        ZZF Industri Indonesia, which started operating in 2012, is one of the companies
                            which is currently developing from the Expanding CHINA ZZF INDUSTRIAL project. This company has a lot to offer
                            equipment especially in construction materials, such as Tower Cranes, Batching Plants, and others.
                            We also guarantee that the products and materials we provide are one of the best products
                            and quality from China, with extraordinary quality.
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="text-center rounded bg-secondary p-4">
                                <h1 class="display-6 text-white">12</h1>
                                <h5 class="text-light mb-0">Years Experience</h5>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rounded">
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Producing High Quality Heavy Equipment</p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Fast Service</p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Harga Affordable Rent and Sell</p>
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i> Extensive and Abundant Experience</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex align-items-center">
                                <img src="img/imgzzf/foto-pak-ginting.jpg" class="img-fluid rounded-circle border border-4 border-secondary" style="width: 100px; height: 100px;" alt="Image">
                                <div class="ms-4">
                                    <h4>Harmony Ginting Ir, Msc</h4>
                                    <p class="mb-0">CEO PT ZZF Indonesia</p>
                                </div>
                                <img src="img/imgzzf/foto-pak-jack-xie.jpg" class="img-fluid rounded-circle border border-4 border-secondary ms-5" style="width: 100px; height: 100px;" alt="Image">
                                <div class="ms-4">
                                    <h4>Jack Xie, MBA</h4>
                                    <p class="mb-0">CEO Founder ZZF Group & PINETREE</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex align-items-center mt-4">
                            <a href="https://zzf.co.id/" target="_blank" class="btn btn-primary rounded py-3 px-5">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-img">
                    <div class="img-1 mb-4">
                        <img src="img/imgzzf/tentang-kami3.jpg" class="img-fluid rounded h-100 w-100" alt="">
                    </div>
                    <div class="img-2">
                        <img src="img/imgzzf/tentang-kami1.jpg" class="img-fluid rounded w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- About End -->

<!-- Features Start -->
<div class="container-fluid feature py-5" id="keunggulan">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Our <span class="text-primary">Speciality</span></h1>
            <p class="mb-0">PT ZZF offers a variety of products with very high quality and affordable</p>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-xl-4">
                <div class="row gy-4 gx-0">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <span class="fa fa-dollar-sign fa-2x"></span> <!-- Ikon untuk Low Price -->
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-3">Low Price</h5>
                                <p class="mb-0">Offer quality solutions at a more affordable cost than competitors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <span class="fa fa-clock fa-2x"></span> <!-- Ikon untuk Time Efficiency -->
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-3">Time Efficiency</h5>
                                <p class="mb-0">Efficiently complete projects in faster time without sacrificing quality.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <img src="img/keunggulan.png" class="img-fluid w-100" style="object-fit: cover;" alt="Img">
            </div>
            <div class="col-xl-4">
                <div class="row gy-4 gx-0">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item justify-content-end">
                            <div class="text-end me-4">
                                <h5 class="mb-3">Service Flexibility</h5>
                                <p class="mb-0">Offer solutions that can be tailored to the specific needs of the project.</p>
                            </div>
                            <div class="feature-icon">
                                <span class="fa fa-cogs fa-2x"></span> <!-- Ikon untuk Service Flexibility -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item justify-content-end">
                            <div class="text-end me-4">
                                <h5 class="mb-3">Machine Reliability</h5>
                                <p class="mb-0">Using reliable, durable high-quality tools to ensure maximum productivity.</p>
                            </div>
                            <div class="feature-icon">
                                <span class="fa fa-check-circle fa-2x"></span> <!-- Ikon untuk Machine Reliability -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


        <!-- Banner Start -->
        <div class="container-fluid banner pb-5 wow zoomInDown" data-wow-delay="0.1s" id="kontak">
            <div class="container pb-5">
                <div class="banner-item rounded">
                    <img src="img/imgzzf/bg3.jpg" class="img-fluid rounded w-100" alt="">
                    <div class="banner-content">
                        <h4 class="text-white">Start Cooperation with Us Now!</h4>
                        <h2 class="text-white">Interested in renting or buying?</h2>
                        <p class="text-white">Contact Us For More Information</p>
                        <div class="banner-btn">
                            <a href="https://wa.link/q0c1lg" target="_blank" class="btn btn-secondary rounded-pill py-3 px-4 px-md-5 me-2">
                                <i class="fab fa-whatsapp me-2"></i> WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Our Client<span class="text-primary"> Review</span></h1>
                    <p class="mb-0">The following are reviews from clients who have used the services of our heavy equipment products and our partners
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="img/testimonial-1.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p>Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam soluta neque ab repudiandae reprehenderit ipsum eos cumque esse repellendus impedit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="img/testimonial-2.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p>Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam soluta neque ab repudiandae reprehenderit ipsum eos cumque esse repellendus impedit.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p>Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam soluta neque ab repudiandae reprehenderit ipsum eos cumque esse repellendus impedit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s" style="position: relative; bottom: 0; width: 100%;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">About Us</h4>
                        <p class="mb-3"> ZZF Industri Indonesia which started operating in 2012 is one of the companies
                            which is developing from the Expanding CHINA ZZF INDUSTRIAL project.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a href="#tentang"><i class="fas fa-angle-right me-2"></i> About</a>
                    <a href="#produk"><i class="fas fa-angle-right me-2"></i>Product </a>
                    <a href="#keunggulan"><i class="fas fa-angle-right me-2"></i> Speciality</a>
                    <a href="#service"><i class="fas fa-angle-right me-2"></i> Service</a>
                    <a href="#kontak"><i class="fas fa-angle-right me-2"></i>Contact</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Contact Info</h4>
                    <a href="#"><i class="fa fa-map-marker-alt me-2"></i> Jl. Karang Tengah Raya No.29, RT.4/RW.4, Lb. Bulus, Cilandak District, South Jakarta City, Special Capital Region of Jakarta 12930</a>
                    <a href="mailto:asmanabila03@gmail.com"><i class="fas fa-envelope me-2"></i> asmanabila03@gmail.com</a>
                    <a href="tel:+"><i class="fas fa-phone me-2"></i> +62 818-961-343</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>PT ZZF Industri</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/* This template is free as long as you keep the below author’s credit link/attribution link/backlink. */-->
                        <!--/* If you'd like to use the template without the below author’s credit link/attribution link/backlink, */-->
                        <!--/* you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". */-->
                        Designed By <a class="border-bottom text-white">ZZF Industri</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        @if (Session::has('success'))
    <script>
      swal("success", "{{ Session::get('success') }}", 'success', {
          button:true,
          button:"OK",
          timer:5000
      });
    </script>
    @endif 
        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

    <!-- Script untuk inisialisasi Owl Carousel -->
<script>
    $(document).ready(function(){
        $(".categories-carousel").owlCarousel({
            items: 1, // Menampilkan satu slide pada satu waktu
            loop: true, // Mengulangi slide setelah selesai
            nav: true, // Mengaktifkan tombol navigasi
            navText: [
                '<span class="text-danger">&#10094;</span>', // Ikon panah merah kiri
                '<span class="text-danger">&#10095;</span>'  // Ikon panah merah kanan
            ],
            autoplay: false, // Menonaktifkan autoplay agar pengguna menggeser manual
            responsive: {
                0: { items: 1 },   // Pada layar kecil (mobile) menampilkan 1 slide
                768: { items: 1 }, // Pada layar sedang (tablet) menampilkan 1 slide
                992: { items: 1 }  // Pada layar besar (desktop) menampilkan 1 slide
            }
        });
    });
</script>


</html>