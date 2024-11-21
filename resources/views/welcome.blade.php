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

.service {
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('img/imgzzf/bg2.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.text-primary, .text-primary span {
    color: #ffffff; /* Sesuaikan dengan warna yang kontras */
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Shadow untuk meningkatkan keterbacaan */
}

.text-primary {
    color: #f1c40f; /* Kuning emas yang kontras dengan biru dan merah */
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
}

/* Atur warna subjudul agar senada namun tetap kontras */
.text-center p {
    color: #ecf0f1; /* Abu-abu terang yang masih terbaca di atas background berwarna */
}

.text-primary, .text-primary span, .text-center p {
    color: #ffffff; /* Warna putih untuk teks utama */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Shadow halus untuk meningkatkan keterbacaan */
}

.btn-blue {
    background-color: #050436;
    color: white;
    border: none;
}

.btn-blue:hover {
    background-color: #03031a; /* sedikit gelap saat hover */
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
                <img src="{{ asset('img/imgzzf/logozzf.jpg') }}" alt="Logo ZZF Industry" class="logo-image" style="height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="/" class="nav-item nav-link active">{{ __('landingpage.Home') }}</a>
                    <a href="/catalog" class="nav-item nav-link">{{ __('landingpage.Catalog') }}</a>
                    <a href="/aboutus" class="nav-item nav-link">{{ __('landingpage.About') }}</a>
                    <a href="/" class="nav-item nav-link">{{ __('landingpage.Service') }}</a>
                    <a href="/contactus" class="nav-item nav-link">{{ __('landingpage.Contact') }}</a>
                </div>

                <a href="/registercustomer" class="btn btn-primary rounded-pill py-2 px-4 mx-2">{{ __('landingpage.Shopping') }}</a>
                <a href="/dashboardseller" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">{{ __('landingpage.Start Selling') }}</a>

                <!-- Dropdown for Language Selection -->
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- Display active language flag based on locale -->
                        <img src="{{ session('locale') == 'id' ? 'https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg' : 'https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg' }}" alt="Active Language Flag" width="20">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                        <li>
                            <a class="dropdown-item" href="{{ route('locale', ['locale' => 'id']) }}">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Indonesian Flag" width="20" style="margin-right: 8px;">
                                Bahasa Indonesia
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('locale', ['locale' => 'en']) }}">
                                <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg" alt="UK Flag" width="20" style="margin-right: 8px;">
                                English
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Dropdown for Profile or Auth Links -->
                <div class="nav-item dropdown mx-3">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> <!-- Profile Icon -->
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @auth('customers')
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
                        {{ isset($totalItems) && $totalItems > 0 ? $totalItems : 0 }}
                    </span>
                </a>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar & Hero End -->


<!-- Services Start -->
<div class="container-fluid service py-5" id="service">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
        <h1 class="display-5 text-primary mb-3">{{ __('landingpage.Type Of Services') }}</h1>
            <p class="mb-0">{{ __('landingpage.Choose According to your needs') }}</p>
        </div>
        <div class="row g-4 d-flex justify-content-center">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item p-4" onclick="openModal('Tower Crane')">
                    <div class="service-icon mb-4">
                        <i class="fa fa-box-open fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Tower Crane</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item p-4" onclick="openModal('Passenger Hoist')">
                    <div class="service-icon mb-4">
                        <i class="fa fa-box-open fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Passenger Hoist</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4" onclick="openModal('Form Work')">
                    <div class="service-icon mb-4">
                        <i class="fa fa-box-open fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Form Work</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4" onclick="openModal('Scaffolding')">
                    <div class="service-icon mb-4">
                        <i class="fa fa-box-open fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Scaffolding</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4" onclick="openModal('Placing Boom')">
                    <div class="service-icon mb-4">
                        <i class="fa fa-box-open fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Placing Boom</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4" onclick="openModal('Safety Net')">
                    <div class="service-icon mb-4">
                        <i class="fa fa-box-open fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Safety Net</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4" onclick="openModal('Concrete Pump')">
                    <div class="service-icon mb-4">
                        <i class="fa fa-box-open fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Concrete Pump</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4" onclick="openModal('Concrete Batching Plant')">
                    <div class="service-icon mb-4">
                        <i class="fa fa-box-open fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Concrete Batching Plant</h5>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4" onclick="openModal('Mobile Crane')">
                    <div class="service-icon mb-4">
                        <i class="fa fa-box-open fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Mobile Crane</h5>
                </div>
            </div>
            <!-- Tambahkan lebih banyak layanan jika diperlukan -->
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel">{{ __('landingpage.What do you need?') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p class="text-primary">{{ __('landingpage.Choose one service : ') }}</p>
                <a id="rentLink" href="#" target="_blank" class="btn btn-primary mx-2">{{ __('landingpage.Rent') }}</a>
                <a id="purchaseLink" href="#" target="_blank" class="btn btn-blue mx-2">{{ __('landingpage.Purchase') }}</a>
            </div>
        </div>
    </div>
</div>

<br>
<!-- Latest Project Tampilan -->

<div class="container-fluid categories pb-5" id="produk">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">{{ __('landingpage.Latest Project') }}</span></h1>
            <p class="mb-0 text-primary">{{ __('landingpage.The Following are Our Latest Project') }}</p>
        </div>
        <div class="categories-carousel owl-carousel">
            @foreach($latestproject as $product)
                <div class="categories-item p-6">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="{{ asset('storage/' . $product->image_url) }}" class="img-fluid w-100 rounded-top" alt="{{ $product->project_name }}">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4>{{ $product->project_name }}</h4>
                            <br>
                            <a href="{{ route('product.show', ['id' => $product->id]) }}" class="btn btn-primary rounded-pill d-flex justify-content-center py-3 mb-3">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
    </div>
</div> 

<!-- Best product Preview -->
<div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">{{ __('landingpage.Our Best Product') }}</span></h1>
            <p class="mb-0 text-primary">{{ __('landingpage.The following are our Best Product in ZZF Industri') }}</p>
        </div>
        <div class="row">
            @foreach($bestproduct as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="categories-item p-4 h-100 text-center">
                        <!-- Gambar Produk -->
                        <div class="categories-img rounded-top mb-3 position-relative">
                            <img src="{{ asset('storage/' . $product->image_url) }}" 
                                 class="img-fluid w-100 rounded product-img" 
                                 alt="{{ $product->name }}" 
                                 data-bs-toggle="modal" 
                                 data-bs-target="#productModal{{ $product->id }}">
                        </div>
                        <!-- Nama Produk -->
                        <h4>
                            <a href="#" 
                               class="text-decoration-none text-dark product-link" 
                               data-bs-toggle="modal" 
                               data-bs-target="#productModal{{ $product->id }}">
                                {{ $product->name }}
                            </a>
                        </h4>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $product->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel{{ $product->id }}">{{ $product->name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <!-- Gambar Produk -->
                                <img src="{{ asset('storage/' . $product->image_url) }}" class="img-fluid rounded mb-3" alt="{{ $product->name }}">
                                <!-- Deskripsi Produk -->
                                <p class="text-dark">{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<br>

<!-- Client Start -->
<div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">{{__('landingpage.Our Client')}}</h1>
            <p class="mb-0 text-primary">{{ __('landingpage.The following are our client partnership') }}</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach($clients as $client)
            <div class="testimonial-item">
                <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i></div>
                <div class="testimonial-inner p-4">
                    <img src="{{ asset('storage/' . $client->logo_url) }}"  class="img-thumbnail" style="width: 180px; height: 100px; object-fit: cover;" alt="{{ $client->company_name }}">
                    <div class="ms-4">
                        <h4>{{ $client->company_name }}</h4>
                        <p>{{ __('landingpage.Our Partner') }}</p>
                    </div>
                </div>
                <div class="border-top rounded-bottom p-4">
                    <p class="mb-0">{{ $client->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Client End -->

<!-- Documentation Start -->
<div class="container-fluid pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">{{ __('landingpage.Our Documentation') }}</span></h1>
            <p class="mb-0 text-primary">{{ __('landingpage.The following are our client partnerships') }}</p>
        </div>
        <div class="row">
            @foreach($clients as $client)
            <div class="col-md-6 mb-4">
                <div class="testimonial-inner text-center">
                    <!-- Menampilkan gambar tanpa border -->
                    <img src="{{ asset('storage/' . $client->documentation_url) }}" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="{{ $client->company_name }}">
                    <div class="pt-3">
                        <!-- Menampilkan nama perusahaan di bawah gambar -->
                        <h4>{{ $client->company_name }}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Documentation End -->


<!-- Features Start -->
<div class="container-fluid feature py-5" id="keunggulan">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">{{ __('landingpage.Our Speciality') }}</h1>
            <p class="mb-0 text-primary">{{ __('landingpage.PT ZZF offers a variety of products with very high quality and affordable') }}</p>
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
                                <h5 class="mb-3">{{ __('landingpage.Low Price') }}</h5>
                                <p class="mb-0">{{ __('landingpage.Offer quality solutions at a more affordable cost than competitors.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <span class="fa fa-clock fa-2x"></span> <!-- Ikon untuk Time Efficiency -->
                            </div>
                            <div class="ms-4">
                                <h5 class="mb-3">{{ __('landingpage.Time Efficiency') }}</h5>
                                <p class="mb-0">{{ __('landingpage.Efficiently complete projects in faster time without sacrificing quality.') }}</p>
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
                                <h5 class="mb-3">{{ __('landingpage.Service Flexibility') }}</h5>
                                <p class="mb-0">{{ __('landingpage.Offer solutions that can be tailored to the specific needs of the project.') }}</p>
                            </div>
                            <div class="feature-icon">
                                <span class="fa fa-cogs fa-2x"></span> <!-- Ikon untuk Service Flexibility -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item justify-content-end">
                            <div class="text-end me-4">
                                <h5 class="mb-3">{{ __('landingpage.Portable Foundation') }}</h5>
                                <p class="mb-0">{{ __('landingpage.Using reliable, durable high-quality tools to ensure maximum productivity.') }}</p>
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

        <!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s" style="position: relative; bottom: 0; width: 100%;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                <div class="footer-item">
                        <h4 class="text-white mb-4">{{ __('landingpage.About Us') }}</h4>
                        <p class="mb-3">{{ __('landingpage.ZZF Industri Indonesia which started operating in 2012 is one of the companies which is developing from the Expanding CHINA ZZF INDUSTRIAL project.') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">{{ __('landingpage.Quick Links') }}</h4>
                    <a href="#tentang"><i class="fas fa-angle-right me-2"></i> {{ __('landingpage.About') }}</a>
                    <a href="#produk"><i class="fas fa-angle-right me-2"></i>{{ __('landingpage.Product') }}</a>
                    <a href="#keunggulan"><i class="fas fa-angle-right me-2"></i> {{ __('landingpage.Speciality') }}</a>
                    <a href="#service"><i class="fas fa-angle-right me-2"></i> {{ __('landingpage.Service') }}</a>
                    <a href="#kontak"><i class="fas fa-angle-right me-2"></i>{{ __('landingpage.Contact') }}</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">{{ __('landingpage.Contact Info') }}</h4>
                    <a href="#"><i class="fa fa-map-marker-alt me-2"></i> Jl. Karang Tengah Raya No.29, RT.4/RW.4, Lb. Bulus, Cilandak District, South Jakarta City, Special Capital Region of Jakarta 12930</a>
                    <a href="mailto:asmanabila03@gmail.com"><i class="fas fa-envelope me-2"></i> asmanabila03@gmail.com</a>
                    <a href="tel:+"><i class="fas fa-phone me-2"></i> +62 818-961-343</a>
                </div>
            </div>
        </div>
    </div>
</div>
        
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

<!-- Script to Handle Modal -->
<script>
function openModal(serviceName) {
    var modalTitle = document.getElementById('serviceModalLabel');
    var rentLink = document.getElementById('rentLink');
    var purchaseLink = document.getElementById('purchaseLink');
    
    // Set konten modal berdasarkan layanan yang diklik
    if (serviceName === 'Tower Crane') {
        modalTitle.innerText = 'Layanan untuk Tower Crane';
        rentLink.href = '/products/rent/towercrane';
        purchaseLink.href = '/products/purchase/towercrane';
    } else if (serviceName === 'Passenger Hoist') {
        modalTitle.innerText = 'Layanan untuk Passenger Hoist';
        rentLink.href = '/products/rent/passengerhoist';
        purchaseLink.href = '/products/purchase/passengerhoist';
    } else if (serviceName === 'Form Work') {
        modalTitle.innerText = 'Layanan untuk Form Work';
        rentLink.href = '/products/rent/formwork';
        purchaseLink.href = '/products/purchase/formwork';
    } else if (serviceName === 'Scaffolding') {
        modalTitle.innerText = 'Layanan untuk Scaffolding';
        rentLink.href = '/products/rent/scaffolding';
        purchaseLink.href = '/products/purchase/scaffolding';
    } else if (serviceName === 'Placing Boom') {
        modalTitle.innerText = 'Layanan untuk Placing Boom';
        rentLink.href = '/products/rent/placingboom';
        purchaseLink.href = '/products/purchase/placingboom';
    } else if (serviceName === 'Safety Net') {
        modalTitle.innerText = 'Layanan untuk Safety Net';
        rentLink.href = '/products/rent/safetynet';
        purchaseLink.href = '/products/purchase/safetynet';
    } else if (serviceName === 'Concrete Pump') {
        modalTitle.innerText = 'Layanan untuk Concrete Pump';
        rentLink.href = '/products/rent/concretepump';
        purchaseLink.href = '/products/purchase/concretepump';
    } else if (serviceName === 'Concrete Batching Plant') {
        modalTitle.innerText = 'Layanan untuk Concrete Batching Plant';
        rentLink.href = '/products/rent/concretebatchingplant';
        purchaseLink.href = '/products/purchase/concretebatchingplant';
    } else if (serviceName === 'Mobile Crane') {
        modalTitle.innerText = 'Layanan untuk Mobile Crane';
        rentLink.href = '/products/rent/mobilecrane';
        purchaseLink.href = '/products/purchase/mobilecrane';
    }

    // Tampilkan modal
    var modal = new bootstrap.Modal(document.getElementById('serviceModal'));
    modal.show();
}

// Seleksi semua gambar produk
document.querySelectorAll('.product-img').forEach((img) => {
    img.addEventListener('click', function () {
        // Dapatkan ID modal dari data-bs-target
        const modalId = img.getAttribute('data-bs-target');
        
        // Pilih elemen modal menggunakan ID
        const modal = document.querySelector(modalId);

        if (modal) {
            // Tampilkan modal secara manual menggunakan Bootstrap Modal API
            const modalInstance = new bootstrap.Modal(modal);
            modalInstance.show();
        } else {
            console.error(Modal dengan ID ${modalId} tidak ditemukan!);
        }
    });
});


</script>


</html>