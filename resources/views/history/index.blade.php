<!DOCTYPE html>
<html lang="en">

    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <meta charset="utf-8">
        <title>ZZF Industri - History Page</title>
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

/* Responsif untuk layar kecil */
@media (max-width: 768px) {
    .checkoutpage .row {
        flex-direction: column; /* Menyusun kotak ke bawah di layar kecil */
    }
}

.text-left {
    text-align: left;
}

/* Membuat tombol lebih besar dan jelas */
.btn {
    font-size: 14px;
    padding: 8px 12px;
    border-radius: 5px;
}

.btn i {
    font-size: 16px;
    margin-right: 5px; /* Menambahkan jarak antara ikon dan teks */
}

/* Hover effect untuk tombol */
.btn:hover {
    opacity: 0.9;
}

/* Menambahkan sedikit shadow untuk efek kedalaman */
.btn {
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Membuat tabel lebih rapi dan readable */
.table th, .table td {
    text-align: center;
    vertical-align: middle;
}

/* Memberikan jarak antar tombol */
td a.btn {
    margin-right: 15px; /* Memberikan jarak antara tombol */
}

/* Mengatur tombol terakhir agar tidak ada margin kanan */
td a.btn:last-child {
    margin-right: 0;
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

<!-- About Section -->
<section class="page-section" id="tentang">
                <div class="container text-center">
                    <div>
                        <h2 class="section-heading text-uppercase">History</h2>
                        <h3 class="section-subheading text-muted">Here's your history order or rent data from zzf website </h3>
                    </div>
<br>

<h3 class="text-left">Orders</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Seller Name</th>
            <th>Product Name</th>
            <th>Order Date</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orderDetails as $order)
            <tr>
                <td>{{ $order->seller_name }}</td>
                <td>{{ $order->product_seller_name }}</td>
                <td>{{ $order->order_date }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->subtotal }}</td>
                <td>{{ $order->status }}</td>
                <td class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('downloadReceiptOrder', ['id' => $order->order_sellers_id]) }}" class="btn btn-success btn-sm mr-2">
                        <i class="fas fa-download"></i> 
                    </a> 
                    <a href="#" class="btn btn-warning btn-sm mr-2">
                        <i class="fas fa-star"></i> 
                    </a>
                    <a href="#" class="btn btn-danger btn-sm">
                        <i class="fas fa-check-circle"></i> 
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<br>

<h3 class="text-left">Rentals</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Seller Name</th>
            <th>Product Name</th>
            <th>Start Date</th>
            <th>Finish Date</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sewaDetails as $sewa)
            <tr>
                <td>{{ $sewa->seller_name }}</td>
                <td>{{ $sewa->product_seller_name }}</td>
                <td>{{ $sewa->start_date }}</td>
                <td>{{ $sewa->finish_date }}</td>
                <td>{{ $sewa->quantity }}</td>
                <td>{{ $sewa->subtotal }}</td>
                <td>{{ $sewa->status }}</td>
                <td class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('downloadReceiptSewa', ['id' => $sewa->sewa_sellers_id]) }}" class="btn btn-success btn-sm mr-2">
                        <i class="fas fa-download"></i> 
                    </a> 
                    <a href="#" class="btn btn-warning btn-sm mr-2">
                        <i class="fas fa-star"></i> 
                    </a>
                    <a href="#" class="btn btn-danger btn-sm">
                        <i class="fas fa-check-circle"></i> 
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

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