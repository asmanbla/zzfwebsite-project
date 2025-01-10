<!DOCTYPE html>
<html lang="en">

    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <meta charset="utf-8">
        <title>ZZF Industri - Product View</title>
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
        <link rel="icon" type="image/x-icon" href="../../img/imgzzf/logo.png" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">

       <!-- Template File CSS -->
       <link href="../../../css/style.css" rel="stylesheet">
<style>

<style>
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


    /* Style untuk search bar */
    .search-container-purchase {
    display: flex;
    justify-content: center; /* Mengatur agar elemen berada di tengah */
    margin-bottom: 20px; /* Jarak bawah */
}

.search-form-purchase {
    display: flex; /* Mengatur agar input dan button berada dalam satu baris */
    border: 2px solid #b22222; /* Warna border merah tua */
    border-radius: 30px; /* Membuat sudut rounded */
    overflow: hidden; /* Menyembunyikan bagian yang melebihi sudut */
    width: 80%; /* Mengatur lebar search bar, bisa disesuaikan */
    max-width: 600px; /* Lebar maksimal */
}

.search-input-purchase {
    border: none; /* Menghilangkan border default */
    padding: 10px 20px; /* Jarak dalam input */
    outline: none; /* Menghilangkan outline saat input terpilih */
    flex: 1; /* Membuat input mengisi ruang yang tersedia */
    font-size: 16px; /* Ukuran font */
    border-radius: 30px 0 0 30px; /* Rounded pada kiri */
}

.search-input-purchase::placeholder {
    color: #aaa; /* Warna placeholder */
}

.search-button-purchase {
    background-color: #b22222; /* Warna latar belakang merah tua */
    border: none; /* Menghilangkan border default */
    color: white; /* Warna teks */
    padding: 10px 15px; /* Jarak dalam button */
    cursor: pointer; /* Menampilkan pointer saat hover */
    transition: background-color 0.3s; /* Efek transisi pada hover */
    border-radius: 0 30px 30px 0; /* Rounded pada kanan */
}

.search-button-purchase:hover {
    background-color: #8b0000; /* Warna latar belakang lebih gelap saat hover */
}

</style>

<style>

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
    color: #6c757d;
    margin-bottom: 2rem;
    text-align: center; /* Rata tengah */
}

.customer-info {
    background-color: #fff; /* Warna isian putih */
    border: 2px solid #2c3e50; /* Outline biru dongker */
    border-radius: 12px;
    padding: 30px;
    max-width: 800px; /* Lebar kotak */
    margin: 0 auto;
    color: #333; /* Teks hitam */
    text-align: left; /* Konten di dalam kotak tetap rata kiri */
    transition: box-shadow 0.3s ease;
}

.customer-info:hover {
    box-shadow: 0px 8px 15px rgba(44, 62, 80, 0.2); /* Bayangan saat hover */
}

.customer-info p {
    font-size: 1.2rem;
    margin: 12px 0;
}

.customer-info strong {
    color: #2c3e50; /* Biru dongker untuk label */
}

/* Icon Profil */
.customer-info i {
    color: #e74c3c; /* Merah untuk icon */
    margin-right: 15px;
    font-size: 3rem;
    display: block; /* Buat icon menjadi block */
    text-align: center; /* Posisikan icon ke tengah */
    margin-bottom: 20px; /* Beri jarak dengan teks profil */
}

.btn-info {
    background-color: #e74c3c; /* Warna merah */
    border-color: #e74c3c;
    font-size: 1.1rem;
    font-weight: 600;
    padding: 12px 28px;
    border-radius: 50px;
    margin-top: 25px;
    color: #fff;
}

.btn-info:hover {
    background-color: #c0392b; /* Merah lebih gelap saat hover */
    border-color: #c0392b;
    transition: all 0.3s ease;
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


/* Animasi */
h2, h3, .customer-info {
    animation: fadeInUp 1s ease-in-out;
}

.custom-btn {
            background-color: #590d0b;; /* Warna merah */
            color: white; /* Warna font putih */
            border: none; /* Menghilangkan border default */
            border-radius: 20px; /* Sudut sedikit bulat */
            padding: 10px 20px; /* Ruang di dalam tombol */
            transition: box-shadow 0.3s ease; /* Transisi untuk efek bayangan */
        }

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsif */
@media (max-width: 768px) {
    .customer-info {
        padding: 20px;
        max-width: 100%;
    }

    h2.section-heading {
        font-size: 2rem;
    }

    h3.section-subheading {
        font-size: 1rem;
    }

    .customer-info p {
        font-size: 1rem;
    }

    .customer-info i {
        font-size: 2.5rem;
    }

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
                            <a href="tel:+62 812-9340-8484" class="text-white me-4"><i class="fas fa-phone-alt text-white me-2"></i>+62 812-9340-8484</a>
                            <a href="mailto:marketingzzf@gmail.com" class="text-white me-0"><i class="fas fa-envelope text-white me-2"></i>marketingzzf@gmail.com</a>
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
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/catalog" class="nav-item nav-link">Catalog</a>
                    <a href="/aboutus" class="nav-item nav-link">About</a>
                    <a href="/" class="nav-item nav-link">Service</a>
                    <a href="/contactus" class="nav-item nav-link">Contact</a>
                </div>

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

<br><br>

            
  <!-- Produk Kami Purchase -->
<div class="container-fluid categories pb-5" id="produk">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Passenger Hoist Products <span class="text-primary">for Rent</span></h1>
            <p class="mb-0">The following are Passenger Hoist Product for Rent<Ri:a></Ri:a> </p>
        </div>

<!-- Penjelasan Tower Crane -->
<div class=""> 
    <h3 class=""> 
        Passenger Hoist
    </h3>
    <p>Passenger hoist adalah alat angkut yang digunakan untuk mengangkut pekerja dan material di proyek konstruksi bertingkat. Alat ini berupa lift besar yang dipasang di sisi bangunan dan berfungsi untuk memindahkan pekerja atau barang dari satu lantai ke lantai lainnya. Passenger hoist dirancang dengan kapasitas angkut yang bervariasi, mampu menampung beberapa orang atau beban berat dalam sekali perjalanan. Alat ini dilengkapi dengan kabin yang dilindungi dan sistem pengaman untuk memastikan keselamatan pengguna. Passenger hoist sering digunakan dalam proyek konstruksi gedung tinggi, membantu mempercepat proses pembangunan dan meningkatkan efisiensi kerja di ketinggian.</p>
</div>

<!-- Product Search -->
@if($productsForRent->isEmpty())
            <p class="text-center"><strong>Product Not Found</strong></p>
        @else
<div class="search-container-purchase">
                <form action="{{ url('product_search_rent/passenger_hoist') }}" method="GET" class="search-form">
                    <input class="search-input-purchase" type="text" name="search" placeholder="Search Products Here">
                    <button class="search-button-purchase" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <br>

        <!-- Menggunakan grid Bootstrap untuk produk yang dijual -->
        <div class="row">
            @foreach($productsForRent as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="categories-item p-4 h-100">
                        <div class="categories-item-inner">
                            <div class="categories-img rounded-top">
                                <img src="{{ asset('storage/' . $product->image1_url) }}" class="img-fluid w-100 rounded-top" alt="{{ $product->product_name }}">
                            </div>
                            <div class="categories-content rounded-bottom p-4">
                                <h4>{{ $product->product_name }}</h4>
                                <a href="{{ route('detailprodukseller.show', $product->id) }}" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Detail</a>
                                <!-- Button Section -->
                            <form action="{{ route('cart.addToCartRent', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <div style="display: flex; justify-content: center; gap: 10px;"> <!-- Flexbox for button alignment -->
                                    <button type="submit" class="btn custom-btn4">Rent</button>
                                    <a href="https://wa.me/{{ $product->phone }}?text=Hallo%20bisakah%20saya%20melakukan%20{{ urlencode($product->type) }}%20untuk%20produk%20{{ urlencode($product->product_name) }}" 
                                        class="btn btn-success contact-seller" 
                                        target="_blank" 
                                        style="height: 100%;"> <!-- Menambahkan btn-success untuk warna hijau -->
                                            <i class="fab fa-whatsapp"></i> Contact Seller
                                    </a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
        <div class="d-flex justify-content-start align-items-center mb-5">
                        <a href="/" class="btn custom-btn" style="margin-right: 15px !important;">Back To Home Page</a>
                        </div>
    </div>
</div>
<br><br>

</body>

<br><br>
        
       <!-- Copyright Start -->
       <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>PT ZZF Industri</a>, All right reserved.</span>
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


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        @if (Session::has('sukses'))
    <script>
      swal("Sukses", "{{ Session::get('sukses') }}", 'success', {
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


</html>