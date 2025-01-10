<!DOCTYPE html>
<html lang="en">

    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <meta charset="utf-8">
        <title>ZZF Industri - About Us Page</title>
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



</style>

    </head>

    <body>
        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
            <div class="container">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap text-white">
                            <a href="https://maps.app.goo.gl/Pi63CAbYZseqwskv8" class="text-white me-4"><i class="fas fa-map-marker-alt text-white me-2"></i>ZZF's Office</a>
                            <a href="tel:+62 812-1800-2682" class="text-white me-4"><i class="fas fa-phone-alt text-white me-2"></i>+62 812-1800-2682</a>
                            <a href="mailto:zzf@gmail.com" class="text-white me-0"><i class="fas fa-envelope text-white me-2"></i>zzf@gmail.com</a>
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
                    <a href="/catalog" class="nav-item nav-link">{{ __('landingpage.Catalog') }}</a>
                    <a href="/aboutus" class="nav-item nav-link active">{{ __('landingpage.About') }}</a>
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

 <!-- About Start -->
<div class="container-fluid overflow-hidden about py-5" id="tentang">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-item">
                    <div class="pb-5">
                        <h1 class="display-5 text-capitalize">{{ __('about.About Us') }}</h1>
                        <p class="mb-0">
                            {{ __('about.Description') }}
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="text-center rounded bg-secondary p-4">
                                <h1 class="display-6 text-white">12</h1>
                                <h5 class="text-light mb-0">{{ __('about.Years Experience') }}</h5>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rounded">
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('about.High Quality Equipment') }}</p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('about.Fast Service') }}</p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('about.Affordable Prices') }}</p>
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i> {{ __('about.Extensive Experience') }}</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex align-items-center">
                                <img src="img/imgzzf/foto-pak-ginting.jpg" class="img-fluid rounded-circle border border-4 border-secondary" style="width: 100px; height: 100px;" alt="Image">
                                <div class="ms-4">
                                    <h4>{{ __('about.Harmony Ginting') }}</h4>
                                    <p class="mb-0">{{ __('about.CEO ZZF Indonesia') }}</p>
                                </div>
                                <img src="img/imgzzf/foto-pak-jack-xie.jpg" class="img-fluid rounded-circle border border-4 border-secondary ms-5" style="width: 100px; height: 100px;" alt="Image">
                                <div class="ms-4">
                                    <h4>{{ __('about.Jack Xie') }}</h4>
                                    <p class="mb-0">{{ __('about.CEO ZZF Group & PINETREE') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex align-items-center mt-4">
                            <a href="https://zzf.co.id/" target="_blank" class="btn btn-primary rounded py-3 px-5">{{ __('about.More About Us') }}</a>
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
                    <a href="mailto:zzf@gmail.com"><i class="fas fa-envelope me-2"></i> zzf@gmail.com</a>
                    <a href="tel:+"><i class="fas fa-phone me-2"></i> +62 812-1800-2682</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

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
    function openModal(category) {
        // Set the modal title dynamically (optional)
        document.getElementById('serviceModalLabel').textContent = `Apa yang anda butuhkan untuk ${category}?`;
        // Open the modal
        var myModal = new bootst    rap.Modal(document.getElementById('serviceModal'));
        myModal.show();
    }

    function handleService(action) {
        // Handle the button click (e.g., redirect based on 'sewa' or 'order')
        if (action === 'sewa') {
            window.location.href = '/sewa'; // Adjust URL as needed
        } else if (action === 'order') {
            window.location.href = '/order'; // Adjust URL as needed
        }
    }
</script>

</html>