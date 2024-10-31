<!DOCTYPE html>
<html lang="en">

    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <meta charset="utf-8">
        <title>ZZF Industri - Cart Page</title>
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

.cart-info {
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

.cart-info:hover {
    box-shadow: 0px 8px 15px rgba(44, 62, 80, 0.2); /* Bayangan saat hover */
}

.cart-info p {
    font-size: 1.2rem;
    margin: 12px 0;
}

.cart-info strong {
    color: #2c3e50; /* Biru dongker untuk label */
}

/* Icon Profil */
.cart-info i {
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

/* Animasi */
h2, h3, .cart-info {
    animation: fadeInUp 1s ease-in-out;
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

h2.section-heading {
            font-size: 2.5rem;
            font-weight: 700;
            color: #c0392b;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        h3.section-subheading {
            font-size: 1.1rem;
            font-weight: 400;
            color: #6c757d;
            text-align: center;
            margin-bottom: 2rem;
        }

        .cart-info {
            background-color: #fff;
            border: 2px solid #2c3e50;
            border-radius: 12px;
            padding: 20px;
            margin: 0 auto;
            max-width: 1000px;
            text-align: left;
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .cart-info img {
            width: 70px;
            height: 70px;
            object-fit: cover;
        }

        .btn-info, .btn-secondary {
            font-size: 1.1rem;
            padding: 10px 20px;
            border-radius: 50px;
        }

        .btn-info:hover {
            background-color: #c0392b;
        }

        @media (max-width: 768px) {
            .cart-info {
                padding: 15px;
            }

            h2.section-heading {
                font-size: 2rem;
            }

            h3.section-subheading {
                font-size: 1rem;
            }
        }

        /* Button Style */
        .d-flex {
            display: flex;
            justify-content: space-between;
        }

        .btn1 {
            border-radius: 15px; /* Membuat sudut sedikit bulat */
            padding: 10px 20px; /* Ruang di dalam tombol */
            background-color: #050436; /* Warna tombol biru */
            color: white;
            border: none;
            transition: box-shadow 0.3s ease; /* Efek transisi */
        }

        .btn1:hover {
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2); /* Efek bayangan saat hover */
            background-color: #CCD0B6; /* Ubah warna tombol saat hover */
        }

        .btn2 {
            border-radius: 15px; /* Membuat sudut sedikit bulat */
            padding: 10px 20px; /* Ruang di dalam tombol */
            background-color: #590d0b; /* Warna tombol biru */
            color: white;
            border: none;
            transition: box-shadow 0.3s ease; /* Efek transisi */
        }

        .btn2:hover {
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2); /* Efek bayangan saat hover */
            background-color: #CCD0B6; /* Ubah warna tombol saat hover */
        }

        /* Style Button Trash */
                .btn-icon {
            background-color: transparent; /* Menghilangkan background button */
            border: none; /* Menghilangkan outline atau border */
            color: black; /* Warna ikon hitam */
            padding: 0; /* Menghapus padding agar hanya ikon yang tampil */
            cursor: pointer; /* Pointer saat hover */
        }

        .btn-icon i {
            font-size: 18px; /* Ukuran ikon */
        }

        .btn-icon:hover {
            color: #555; /* Warna saat hover (abu-abu gelap) */
        }

        .cart-item {
            display: grid;
            grid-template-columns: 100px 2fr 1fr 1fr 1fr;
            align-items: center;
            gap: 15px;
            padding: 10px;
            border-bottom: 1px solid #eaeaea;
        }

        .product-thumbnail img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

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

        </style>

    </head>

      <!-- Topbar Start -->
      <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
            <div class="container">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="text-white me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Location here</a>
                            <a href="tel:+62 818-961-343" class="text-white me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+62 818-961-343</a>
                            <a href="mailto:asmanabila03@gmail.com" class="text-white me-0"><i class="fas fa-envelope text-primary me-2"></i>asmanabila03@gmail.com</a>
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

               <!-- Cart Section -->
<section class="page-section" id="tentang">
    <div class="container text-center">
        <h2 class="section-heading text-uppercase">Your Cart</h2>
        <h3 class="section-subheading text-muted">Review your selected products and proceed to checkout</h3>
        <div class="cart-info">
                    <form action="{{ route('checkout.store') }}" method="POST" id="checkout-form">
                @csrf
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price (Purchase)</th>
                            <th>Price (Rent)</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($groupedCartItems as $seller => $items)
                                <tr>
                                    <td colspan="7" style="text-align: left;">
                                        <h6>{{ $items[0]->productSellers && $items[0]->productSellers->seller ? $items[0]->productSellers->seller->name : 'PT ZZF Industry' }}</h6>
                                    </td>
                                </tr>
                                @foreach ($items as $item)
<<<<<<< HEAD
<tr>
    <td class="product-thumbnail">
        <input type="checkbox" class="item-checkbox" name="selected_items[]" value="{{ $item->productSellers->id }}" style="margin-right: 10px;">
        @if ($item->product)
            <img src="{{ asset('storage/' . $item->product->image1_url) }}" alt="{{ $item->product->product_name }}" style="width: 50px; height: 50px;">
        @elseif ($item->productSellers)
            <img src="{{ asset('storage/' . $item->productSellers->image1_url) }}" alt="{{ $item->productSellers->product_name }}" style="width: 50px; height: 50px;">
        @else
            No Image
        @endif
    </td>
    <td>{{ $item->product ? $item->product->product_name : $item->productSellers->product_name }}</td>
    <td class="purchase-price" data-price="{{ $item->product ? $item->product->purchase_price : $item->productSellers->purchase_price }}">
    Rp{{ number_format($item->product ? $item->product->purchase_price : $item->productSellers->purchase_price, 0, ',', '.') }}
</td>
<td class="rent-price" data-price="{{ $item->product ? $item->product->rent_price : $item->productSellers->rent_price }}">
    Rp{{ number_format($item->product ? $item->product->rent_price : $item->productSellers->rent_price, 0, ',', '.') }}
</td>
    <td class="text-center">
    <form action="{{ route('cart.updateQuantity', $item->id) }}" method="POST" style="display: inline;">
        @csrf
        <input type="hidden" name="quantity" value="{{ $item->quantity - 1 }}">
        <button type="submit" class="btn btn-sm btn-light">-</button>
    </form>
    <span class="quantity-text">{{ $item->quantity }}</span>
    <form action="{{ route('cart.updateQuantity', $item->id) }}" method="POST" style="display: inline;">
        @csrf
        <input type="hidden" name="quantity" value="{{ $item->quantity + 1 }}">
        <button type="submit" class="btn btn-sm btn-light">+</button>
    </form>
</td>
<td class="total-price">
    Rp{{ number_format($item->total, 0, ',', '.') }}
</td>
    <td>
        <a href="/hapuscart/{{ $item->id }}" class="btn btn-danger btn-sm" onclick="return confirmDeletion(event)">Remove</a>
    </td>
</tr>
@endforeach

=======
                                    <tr>
                                        <td class="product-thumbnail">
                                            <input type="checkbox" class="item-checkbox" name="selected_items[]" id ="selectedItems" value="{{ $item->productSellers->id }}" style="margin-right: 10px;">
                                            @if ($item->product)
                                                <img src="{{ asset('storage/' . $item->product->image1_url) }}" alt="{{ $item->product->product_name }}" style="width: 50px; height: 50px;">
                                            @elseif ($item->productSellers)
                                                <img src="{{ asset('storage/' . $item->productSellers->image1_url) }}" alt="{{ $item->productSellers->product_name }}" style="width: 50px; height: 50px;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $item->product ? $item->product->product_name : $item->productSellers->product_name }}</td>
                                        <td>Rp{{ number_format($item->product ? $item->product->purchase_price : $item->productSellers->purchase_price, 0, ',', '.') }}</td>
                                        <td>Rp{{ number_format($item->product ? $item->product->rent_price : $item->productSellers->rent_price, 0, ',', '.') }}</td>
                                        <td class="text-center">
                                            <span class="quantity-text">{{ $item->quantity }}</span>
                                        </td>
                                        <td class="total-price" data-total="{{ $item->total }}">
                                            Rp{{ number_format($item->total, 0, ',', '.') }}
                                        </td>
                                        <td>
                                            <a href="/hapuscart/{{ $item->id }}"  class="btn btn-danger btn-sm" onclick="return confirmDeletion(event)">Remove</a>
                                        </td>
                                    </tr>
                                @endforeach
>>>>>>> 0252c3ea99e7c8f525c207540569881463bf7c18
                            @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan="5" class="text-end"><strong>Total Keseluruhan:</strong></td>
                            <td id="grand-total" name="total_amount">Rp0</td> <!-- Inisialisasi grand total -->
                            <td></td>
                        </tr>
                    </tfoot>
                    <input type="hidden" name="total_amount" id="hidden-grand-total">
                </table>

                <div class="mb-3">
                    <label for="action" class="form-label">Action</label>
                    <select class="form-select" aria-label="Default select example" id="action" name="checkout_type" required>
                        <option selected disabled>Choose Action Type</option>
                        <option value="rent">Rent</option>
                        <option value="purchase">Purchase</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <a href="/" class="btn1 btn-info">Continue To Shopping</a>
                    <button type="submit" class="btn2 btn-info">Proceed to Checkout</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    // Fungsi untuk mengupdate grand total
function updateGrandTotal() {
    let grandTotal = 0;

    document.querySelectorAll('.item-checkbox:checked').forEach(checkbox => {
        const row = checkbox.closest('tr');
        const totalCell = row.querySelector('.total-price');
        const total = parseFloat(totalCell.getAttribute('data-total'));

        if (!isNaN(total)) {
            grandTotal += total;
        }
    });

    document.getElementById('grand-total').innerText = 'Rp' + grandTotal.toLocaleString('id-ID');
}

// Fungsi untuk mengupdate total per item saat quantity berubah
function updateItemTotal(row) {
    const quantity = parseInt(row.querySelector('.quantity-input').value);
    const price = parseFloat(row.querySelector('.price').getAttribute('data-price'));
    const totalCell = row.querySelector('.total-price');
    const total = quantity * price;

    totalCell.innerText = 'Rp' + total.toLocaleString('id-ID');
    totalCell.setAttribute('data-total', total);

    updateGrandTotal();  // Perbarui grand total setelah item total diperbarui
}

// Event listener untuk tombol +
document.querySelectorAll('.quantity-increase').forEach(button => {
    button.addEventListener('click', function() {
        const row = button.closest('tr');
        const quantityInput = row.querySelector('.quantity-input');
        quantityInput.value = parseInt(quantityInput.value) + 1;
        updateItemTotal(row);
    });
});

// Event listener untuk tombol -
document.querySelectorAll('.quantity-decrease').forEach(button => {
    button.addEventListener('click', function() {
        const row = button.closest('tr');
        const quantityInput = row.querySelector('.quantity-input');
        if (parseInt(quantityInput.value) > 1) {  // Cegah quantity < 1
            quantityInput.value = parseInt(quantityInput.value) - 1;
            updateItemTotal(row);
        }
    });
});

// Checkbox change event to update grand total
document.querySelectorAll('.item-checkbox').forEach(checkbox => {
    checkbox.addEventListener('change', updateGrandTotal);
});

</script>
<br><br>
       <!-- Copyright Start -->
       <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>PT ZZF Industri</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
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

    <!-- Js Logic -->

    <script>
    function updateTotal(input) {
        let row = input.closest('tr'); // Ambil elemen <tr> terdekat
        let price = parseFloat(input.dataset.price); // Ambil harga dari data atribut
        let quantity = parseInt(input.value); // Ambil nilai quantity
        let totalPrice = price * quantity; // Hitung total untuk item ini

        // Update total price di row ini
        row.querySelector('.total-price').textContent = 'Rp' + totalPrice.toLocaleString('id-ID', { minimumFractionDigits: 0 });
        row.querySelector('.total-price').setAttribute('data-total', totalPrice); // Update data atribut total

        // Hitung total keseluruhan
        let grandTotal = 0;
        document.querySelectorAll('.total-price').forEach(function(item) {
            grandTotal += parseFloat(item.getAttribute('data-total')); // Ambil data total dari setiap item
        });

        // Update total keseluruhan
        document.getElementById('grand-total').textContent = 'Rp' + grandTotal.toLocaleString('id-ID', { minimumFractionDigits: 0 });
    }

    // Ambil semua checkbox dan elemen grand total
    const checkboxes = document.querySelectorAll('.item-checkbox');
    const grandTotalElement = document.getElementById('grand-total');

    // Fungsi untuk menghitung ulang total
    function updateGrandTotal() {
        let grandTotal = 0;
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                grandTotal += parseFloat(checkbox.value); // Tambahkan nilai item yang dipilih
            }
        });
        grandTotalElement.textContent = 'Rp' + new Intl.NumberFormat('id-ID').format(grandTotal); // Format ke Rupiah
    }

    // Event listener untuk setiap checkbox
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateGrandTotal);
    });
</script>

<script>
    document.querySelectorAll('.quantity-button').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault();

        const row = this.closest('tr');
        const actionType = document.getElementById('action').value; // Check selected action

        // Select price based on action type
        const price = parseFloat(row.querySelector(
            actionType === 'purchase' ? '.purchase-price' : '.rent-price'
        ).textContent.replace(/[^0-9.-]+/g, ""));
        
        const quantity = parseInt(row.querySelector('.quantity-input').value);
        const total = price * quantity;

        
    });
});
</script>

<script>
    document.querySelectorAll('.decrease-quantity').forEach(button => {
    button.addEventListener('click', function() {
        const quantityField = this.parentElement.querySelector('.quantity-input');
        let quantity = parseInt(quantityField.value);

        if (quantity > 1) {  // Hanya kurangi jika quantity > 1
            quantity--;
            quantityField.value = quantity;

            // Update harga total produk dan grand total
            updateTotalPrice(this, quantity);
            updateGrandTotal();
        }
    });
});

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.item-checkbox');
        const grandTotalElement = document.getElementById('grand-total');
        const hiddenGrandTotal = document.getElementById('hidden-grand-total');

        // Fungsi untuk menghitung total
        function calculateGrandTotal() {
            let grandTotal = 0;
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    const row = checkbox.closest('tr');
                    const totalPrice = parseFloat(row.querySelector('.total-price').getAttribute('data-total'));
                    grandTotal += totalPrice; // Tambahkan total harga item ke grand total
                }
            });
            // Update grand total di elemen
            grandTotalElement.innerText = 'Rp' + grandTotal.toLocaleString('id-ID');
            hiddenGrandTotal.value = grandTotal; // Update hidden input dengan grand total
        }

        // Tambahkan event listener untuk checkbox
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', calculateGrandTotal);
        });

        // Panggil fungsi untuk menghitung total saat halaman dimuat
        calculateGrandTotal();
    });
</script>


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
