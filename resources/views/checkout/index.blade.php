<!DOCTYPE html>
<html lang="en">

    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <meta charset="utf-8">
        <title>ZZF Industri - Checkout Page</title>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- Sweetalert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Logo Website-->
        <link rel="icon" type="image/x-icon" href="img/imgzzf/logo.png" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template File CSS -->
        <link href="../css/style.css" rel="stylesheet">
<style>

.product-name {
            font-size: 1.2em;
            font-weight: bold;
        }

        .product-price, .product-quantity, .total-price {
            text-align: center;
        }

        .btn-icon {
            background: none;
            border: none;
        }

        .checkoutpage {
            max-width: 1200px; /* Lebar maksimum untuk kontainer */
            margin: 40px auto; /* Memusatkan konten dan memberi jarak atas-bawah */
            padding: 20px;
        }

        /* Checkout Page Layout */
        .checkoutpage .row {
            display: flex;
            justify-content: space-between; /* Memberi jarak antara kotak */
            flex-wrap: wrap; /* Supaya responsif dan pindah ke bawah di layar kecil */
            gap: 25px; /* Jarak antar-kotak */
        }

        .row {
            display: flex;
            justify-content: space-between;
        }

       /* Gaya Umum */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Latar belakang abu-abu terang untuk kontras */
            color: #333; /* Warna teks utama */
        }

       /* Gaya Umum */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
}

    .item-image {
        width: 100px; /* Atur lebar gambar */
        height: 100px; /* Atur tinggi gambar */
        object-fit: cover; /* Memastikan gambar tidak terdistorsi */
        margin-right: 10px;
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

/* Checkout Page Layout */
/* Container for the checkout page */
.checkoutpage .stylekotak {
    text-align: left; /* Ensures all text aligns to the left */
    padding: 20px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow */
    border-radius: 8px;
    margin-bottom: 20px;
    background-color: #fff; /* Adds a background color to make it look more boxed */
}

/* Additional styling for the left-aligned data */
.checkoutpage .stylekotak h3 {
    color: #d80000; /* Adjust heading color */
    margin-bottom: 15px;
}

.checkoutpage .stylekotak p,
.checkoutpage .stylekotak ul {
    margin: 5px 0; /* Adds some spacing between paragraphs and list items */
}

.item-container {
    display: flex;
    align-items: flex-start; /* Aligns items to the top-left */
    margin-bottom: 15px;
}

.item-container img {
    width: 100px;
    height: auto;
    margin-right: 10px;
}

.item-container .item-details {
    text-align: left; /* Ensures details are aligned to the left */
}

/* Daftar Barang yang Dipilih */
#selected-items {
    list-style-type: none;
    padding: 0;
}

/* Item Daftar */
#selected-items li {
    padding: 10px 0;
    border-bottom: 1px solid #dee2e6;
}

/* Item terakhir tanpa garis bawah */
#selected-items li:last-child {
    border-bottom: none;
}


/* Responsif untuk layar kecil */
@media (max-width: 768px) {
    .checkoutpage .row {
        flex-direction: column; /* Menyusun kotak ke bawah di layar kecil */
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
                    <a href="/" class="navbar-brand p-0">
                        <h1 class="display-6 text-primary"><i class="fas fa-hard-hat me-3"></i>ZZF Industry</h1>

                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <a href="/" class="nav-item nav-link">Product</a>
                            <a href="/" class="nav-item nav-link">About</a>
                            <a href="/" class="nav-item nav-link">Speciality</a>
                            <a href="/" class="nav-item nav-link">Service</a>
                            <a href="/" class="nav-item nav-link">Contact</a>
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
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

<br><br>

          <!-- Isi dari halaman -->

     <!-- About Section -->
<section class="page-section" id="tentang">
    <div class="container text-center">
        <div>
            <h2 class="section-heading text-uppercase">Checkout Page</h2>
            <h3 class="section-subheading text-muted">This is your item from the cart page and will be processed for payment</h3>
        </div>
        <div class="checkoutpage">
            <div class="row">
                <!-- Kotak Kanan: Data Customer -->
                <div class="stylekotak">
                    <h3>Data Customer</h3>
                    <p>Name: {{ $customer->name }}</p>
                    <p>Email: {{ $customer->email }}</p>
                    <p>Telephone: {{ $customer->phone }}</p>
                    <p>Address: {{ $customer->address1 }}</p>
                    <p>Another Address: {{ $customer->address2 }}</p>
                    <!-- Tambahkan field lain sesuai kebutuhan -->
                </div>

                <div class="stylekotak">
                    <h3>Item Selected</h3>
                    <form action="{{ route('checkoutprocess.store') }}" method="POST">
                        @csrf
                        <ul id="selected-items">
                            @forelse($selectedItems as $item)
                                <li class="item-container" style="display: flex; align-items: center; margin-bottom: 15px;">
                                    <img src="{{ asset('storage/' . $item->productSellers->image1_url) }}" alt="{{ $item->productSellers->product_name }}" class="item-image" style="width: 100px; height: 100px; object-fit: cover; margin-right: 15px;">
                                    <div class="item-details">
                                        <h4>{{ $item->productSellers->product_name }}</h4>
                                        <p>Seller Name: {{ $item->productSellers->seller->name }}</p>
                                        <p>Price: Rp{{ number_format($item->total, 0, ',', '.') }}</p>
                                        <p>Total Items: {{ $item->quantity }}</p>
                                        <input type="hidden" name="selected_items[]" value="{{ $item->productSellers->id }}">
                                    </div>
                                </li>
                            @empty
                                <li>No Items Selected</li>
                            @endforelse
                        </ul>
                        @if($selectedItems->isNotEmpty())
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                                <h4>Total Price: Rp{{ number_format($totalPrice, 0, ',', '.') }}</h4>
                                <input type="hidden" name="total_amount" value="{{ $totalPrice }}">
                                <p>Checkout Type: <strong>{{ ucfirst(session('checkout_type', 'purchase')) }}</strong></p>
                                <input type="hidden" name="checkout_type" value="{{ session('checkout_type', 'purchase') }}">
                                <button type="submit" class="btn btn-primary">Pay Now</button>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


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