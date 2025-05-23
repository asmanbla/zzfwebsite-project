<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <meta charset="utf-8">
    <title>ZZF Industri - Detail Products Latest Project</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Logo Website-->
    <link rel="icon" type="image/x-icon" href="../img/imgzzf/logo.png" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template File CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Feather Icons  -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My style -->
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/styleproductdetails.css" />

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/img/logoweb.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="{{ ('css/styles.css')}}" rel="stylesheet" />

    <style>
        /* Nav Style */
        .nav-bar {
            padding-top: 0.2rem;  /* Mengurangi padding atas */
            padding-bottom: 0.2rem; /* Mengurangi padding bawah */
        }

        .navbar .navbar-brand h1 {
            font-size: 2rem;  /* Atur ukuran teks menjadi lebih kecil */
            margin: 0;  /* Menghilangkan margin yang mungkin menyebabkan elemen lebih tinggi */
        }

        .navbar-nav .nav-link {
            padding-top: 0.10rem;  /* Kurangi padding antara teks dan batas atas/bawah */
            padding-bottom: 0.25rem;
        }

        .navbar-toggler {
            padding: 0.25rem 0.5rem; /* Mengurangi ukuran toggle button */
        }

        body {
            font-family: 'Lato', sans-serif;
            background-color: #f8f9fa; /* Warna latar belakang */
            margin: 0;
            padding: 0;
        }

        .product-detail {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 18px;
            overflow: hidden;
        }

        .product-images {
            flex: 1;
            position: relative; /* Agar anak elemen bisa diposisikan */
            overflow: hidden;
        }

        .product-images img {
            width: 100%; 
            height: auto; 
            object-fit: cover; 
            border-radius: 8px 0 0 8px; /* Rounded corners on the left side */
        }

        .arrow {
            position: absolute;
            top: 50%; /* Posisikan di tengah vertikal */
            transform: translateY(-50%); /* Pusatkan secara vertikal */
            background-color: rgba(211, 211, 211, 0.8); /* Warna abu-abu */
            border-radius: 50%; /* Membuat lingkaran */
            width: 24px; /* Ukuran lingkaran */
            height: 24px; /* Ukuran lingkaran */
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            outline: 2px solid rgba(170, 170, 170, 0.8); /* Outline lingkaran */
        }

        .arrow-left {
            left: 10px; /* Jarak dari gambar ke kiri */
        }

        .arrow-right {
            right: 10px; /* Jarak dari gambar ke kanan */
        }

        .product-info {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: left;
            background-color: #fff;
        }

        h1 {
            font-size: 2rem;
            margin: 0;
            color: #333;
        }

        p {
            font-size: 1rem;
            color: #555;
            line-height: 1.5;
        }

        .price {
            font-weight: bold;
            font-size: 1.5rem;
            color: #28a745; /* Warna hijau untuk harga */
        }

        .fa-star {
            color: gold;
        }

        .btn {
            border-radius: 5px; /* Bulatkan sudut tombol */
            font-weight: bold;
        }

        .ppn {
            color: #B40707;
        }

        footer {
            background-color: #343a40; /* Warna latar belakang footer */
            color: #ffffff; /* Warna teks footer */
            padding: 20px 0;
            text-align: center;
        }

        footer a {
            color: #ffffff; /* Warna tautan footer */
            text-decoration: none; /* Menghilangkan garis bawah tautan */
        }

        footer a:hover {
            text-decoration: underline; /* Menambahkan garis bawah saat hover */
        }

        /* Umum */
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h2.section-heading {
            font-size: 2.5rem;
            font-weight: 700;
            color: #c0392b; /* Merah */
            margin-bottom: 1rem;
            text-align: center; /* Rata tengah */
        }

        h3.section-subheading {
            font-size: 1.1rem;
            font-weight: 400;
            color: black;
            margin-bottom: 2rem;
            text-align: center; /* Rata tengah */
        }

        .footer {
            display: flex;
            justify-content: left;
            align-items: left;
            text-align: left;
            color: white;
        }

        .footer .container {
            max-width: 100%;
        }

        .footer-item {
            display: flex;
            flex-direction: column;
            justify-content: left;
            align-items: left;
            text-align: left;
        }

        .footer .row {
            display: flex;
            justify-content: space-around;
        }

        .footer-item a {
            text-align: left;
        }

        .custom-btn {
            background-color: #590d0b;; /* Warna merah */
            color: white; /* Warna font putih */
            border: none; /* Menghilangkan border default */
            border-radius: 20px; /* Sudut sedikit bulat */
            padding: 10px 20px; /* Ruang di dalam tombol */
            transition: box-shadow 0.3s ease; /* Transisi untuk efek bayangan */
        }

        .custom-btn2 {
            background-color: #050436; /* Warna biru */
            color: white; /* Warna font putih */
            border: none; /* Menghilangkan border default */
            border-radius: 10px; /* Sudut sedikit bulat */
            padding: 10px 20px; /* Ruang di dalam tombol */
            transition: box-shadow 0.3s ease; /* Transisi untuk efek bayangan */
        }

        .custom-btn3 {
            background-color: #475054; /* Warna biru */
            color: white; /* Warna font putih */
            border: none; /* Menghilangkan border default */
            border-radius: 10px; /* Sudut sedikit bulat */
            padding: 10px 20px; /* Ruang di dalam tombol */
            transition: box-shadow 0.3s ease; /* Transisi untuk efek bayangan */
        }

        .custom-btn:hover {
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.3); /* Efek bayangan saat hover */
        }

        /* Swipper Logo */

        .swiper-button-next, .swiper-button-prev {
            background-color: transparent;
            border: 2px solid #ccc; /* Abu-abu untuk outline */
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-button-next::after, .swiper-button-prev::after {
            content: '';
            width: 0;
            height: 0;
            border-style: solid;
        }

        .swiper-button-next::after {
            border-width: 8px 0 8px 14px; /* Bentuk segitiga */
            border-color: transparent transparent transparent #ccc; /* Warna abu-abu untuk panah */
        }

        .swiper-button-prev::after {
            border-width: 8px 14px 8px 0; /* Bentuk segitiga terbalik */
            border-color: transparent #ccc transparent transparent; /* Warna abu-abu untuk panah */
        }
    </style>
</head>
        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
            <div class="container">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap text-white">
                            <a href="https://maps.app.goo.gl/Pi63CAbYZseqwskv8" class="text-white me-4"><i class="fas fa-map-marker-alt text-white me-2"></i>ZZF's Office</a>
                           
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
                    <a href="/" class="nav-item nav-link">{{ __('landingpage.Home') }}</a>
                    <a href="/catalog" class="nav-item nav-link active">{{ __('landingpage.Catalog') }}</a>
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

<br><br>

<body>
    <div>
        <h2 class="section-heading text-uppercase">Products Details Latest Project</h2>
        <h3 class="section-subheading text-muted">Here's the produk details data for more information about the products </h3>
    </div>
    <div class="container">
        <div class="product-detail d-flex">
            <!-- Product Images -->
            <div class="product-images flex-shrink-0" style="max-width: 50%; padding-right: 20px;">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @if($latestproject->image_url)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/' . $latestproject->image_url) }}" alt="{{ $latestproject->project_name }}" style="width: 75%; height: auto;" class="product-image">
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="product-info d-flex flex-column justify-content-center" style="max-width: 50%;">
                <h1><b>{{ $latestproject->project_name }}</b></h1>
                <br>
                <p>{{ $latestproject->description }}</p>
            </div>
        </div>
    </div>
    <br><br>
</body>

       
       <!-- Copyright Start -->
       <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="https://zzf.co.id/" target="_blank" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>PT ZZF Industri</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white">ZZF Industri</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


    <script>
        // Swiper initialization
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
</body>

@if (Session::has('success'))
      <script>
        swal("Success", "{{ Session::get('success') }}", "success", {
          button: true,
          button: "OK",
          timer: 5000
        });
      </script>
    @endif 

    @if (Session::has('error'))
      <script>
        swal("Error", "{{ Session::get('error') }}", "error", {
          button: true,
          button: "OK",
          timer: 5000
        });
      </script>
    @endif 

</html>
