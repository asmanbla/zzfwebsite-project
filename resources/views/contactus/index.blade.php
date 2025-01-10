<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
    <!-- CSS -->
    <style>

.social-media-links {
    display: flex;
    gap: 10px;
}
.social-icon-link {
    display: inline-flex;
    width: 32px; /* Ubah ukuran sesuai kebutuhan */
    height: 32px;
}
.icon {
    width: 100%;
    height: auto;
}

.map-container {
    position: relative;
    padding-bottom: 56.25%; /* Ratio 16:9 */
    height: 0;
    overflow: hidden;
    max-width: 100%;
    background: #eee;
}

.map-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

.contact_us_6 * {
  font-family: Nunito, sans-serif;
}

.contact_us_6 .text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  line-height: 25px;
}

.contact_us_6 .responsive-cell-block {
  min-height: 75px;
}

.contact_us_6 input:focus,
.contact_us_6 textarea:focus {
  outline-color: initial;
  outline-style: none;
  outline-width: initial;
}

.contact_us_6 .container-block {
  min-height: 75px;
  width: 100%;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  display: block;
}

.contact_us_6 .responsive-container-block {
  min-height: 75px;
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.contact_us_6 .responsive-container-block.big-container {
  padding-top: 10px;
  padding-right: 30px;
  width: 35%;
  padding-bottom: 10px;
  padding-left: 30px;
  background-color: #14115e;
  position: absolute;
  height: 950px;
  right: 0px;
}

.contact_us_6 .responsive-container-block.container {
  position: relative;
  min-height: 75px;
  flex-direction: row;
  z-index: 2;
  flex-wrap: nowrap;
  align-items: center;
  justify-content: center;
  padding-top: 0px;
  padding-right: 30px;
  padding-bottom: 0px;
  padding-left: 30px;
  max-width: 1320px;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
}

.contact_us_6 .container-block.form-wrapper {
  background-color: white;
  max-width: 450px;
  text-align: center;
  padding-top: 50px;
  padding-right: 40px;
  padding-bottom: 50px;
  padding-left: 40px;
  box-shadow: rgba(0, 0, 0, 0.05) 0px 4px 20px 7px;
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
  border-bottom-left-radius: 6px;
  margin-top: 90px;
  margin-right: 0px;
  margin-bottom: 60px;
  margin-left: 0px;
}

.contact_us_6 .text-blk.contactus-head {
  font-size: 36px;
  line-height: 52px;
  font-weight: 900;
}

.contact_us_6 .text-blk.contactus-subhead {
  color: #9c9c9c;
  width: 300px;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
  display: none;
}

.contact_us_6 .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12 {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 26px;
  margin-left: 0px;
  min-height: 50px;
}

.contact_us_6 .input {
  width: 100%;
  height: 50px;
  padding-top: 1px;
  padding-right: 15px;
  padding-bottom: 1px;
  padding-left: 15px;
  border-top-width: 2px;
  border-right-width: 2px;
  border-bottom-width: 2px;
  border-left-width: 2px;
  border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;
  border-top-color: #eeeeee;
  border-right-color: #eeeeee;
  border-bottom-color: #eeeeee;
  border-left-color: #eeeeee;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  font-size: 16px;
  color: black;
}

.contact_us_6 .textinput {
  width: 98%;
  min-height: 150px;
  padding-top: 20px;
  padding-right: 15px;
  padding-bottom: 20px;
  padding-left: 15px;
  border-top-width: 2px;
  border-right-width: 2px;
  border-bottom-width: 2px;
  border-left-width: 2px;
  border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;
  border-top-color: #eeeeee;
  border-right-color: #eeeeee;
  border-bottom-color: #eeeeee;
  border-left-color: #eeeeee;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  font-size: 16px;
}

.contact_us_6 .submit-btn {
  width: 98%;
  background-color: #14115e;
  height: 60px;
  font-size: 20px;
  font-weight: 700;
  color: white;
  border-top-width: 0px;
  border-right-width: 0px;
  border-bottom-width: 0px;
  border-left-width: 0px;
  border-top-style: outset;
  border-right-style: outset;
  border-bottom-style: outset;
  border-left-style: outset;
  border-top-color: #767676;
  border-right-color: #767676;
  border-bottom-color: #767676;
  border-left-color: #767676;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-right-radius: 40px;
  border-bottom-left-radius: 40px;
}

.contact_us_6 .form-box {
  z-index: 2;
  margin-top: 0px;
  margin-right: 48px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.contact_us_6 .text-blk.input-title {
  text-align: left;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 10px;
  font-size: 14px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 5px;
  margin-left: 0px;
  color: #9c9c9c;
}

.contact_us_6 ::placeholder {
  color: #dadada;
}

.contact_us_6 .mob-text {
  display: block;
  text-align: left;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 25px;
  margin-left: 0px;
}

.contact_us_6 .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-12.wk-ipadp-12 {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 20px;
  margin-left: 0px;
}

.contact_us_6 .text-blk.contactus-subhead.color {
  color: white;
}

.contact_us_6 .map-box {
  max-width: 800px;
  max-height: 520px;
  width: 100%;
  height: 520px;
  background-color: #d9d9d9;
  background-image: url("https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/sc23.png");
  background-size: cover;
  background-position-x: 50%;
  background-position-y: 50%;
}

.contact_us_6 .map-part {
  width: 100%;
  height: 100%;
}

.contact_us_6 .text-blk.map-contactus-head {
  font-weight: 900;
  font-size: 22px;
  line-height: 32px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 10px;
  margin-left: 0px;
  color: #14115e;
}

.contact_us_6 .text-blk.map-contactus-subhead {
  max-width: 300px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 20px;
  margin-left: 0px;
}

.contact_us_6 .social-media-links.mob {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 30px;
  margin-left: 0px;
  width: 230px;
  display: flex;
  justify-content: flex-start;
}

.contact_us_6 .link-img {
  width: 30px;
  height: 30px;
  margin-top: 0px;
  margin-right: 25px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.contact_us_6 .link-img.image-block {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.contact_us_6 .social-icon-link {
  margin: 0 25px 0 0;
  padding: 0 0 0 0;
}

@media (max-width: 1024px) {
  .contact_us_6 .responsive-container-block.container {
    justify-content: center;
  }

  .contact_us_6 .map-box {
    position: absolute;
    top: 0px;
    max-height: 320px;
  }

  .contact_us_6 .map-box {
    max-width: 100%;
    width: 100%;
  }

  .contact_us_6 .responsive-container-block.container {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .contact_us_6 .map-part {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .contact_us_6 .container-block.form-wrapper {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .mob-text {
    display: block;
  }

  .contact_us_6 .form-box {
    margin-top: 200px;
    margin-right: 60px;
    margin-bottom: 40px;
    margin-left: 0px;
  }

  .contact_us_6 .link-img {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    display: flex;
    justify-content: space-evenly;
  }

  .contact_us_6 .social-media-links.mob {
    justify-content: space-evenly;
  }

  .contact_us_6 .responsive-cell-block.wk-desk-7.wk-ipadp-12.wk-tab-12.wk-mobile-12 {
    text-align: center;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    flex-direction: row;
  }

  .contact_us_6 .text-blk.contactus-subhead {
    display: block;
  }

  .contact_us_6 .mob-text {
    text-align: center;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .responsive-container-block.container {
    flex-wrap: wrap;
  }

  .contact_us_6 .form-box {
    margin-top: 200px;
    margin-right: 0px;
    margin-bottom: 40px;
    margin-left: 0px;
  }
}

@media (max-width: 768px) {
  .contact_us_6 .submit-btn {
    width: 100%;
  }

  .contact_us_6 .input {
    width: 100%;
  }

  .contact_us_6 .textinput {
    width: 100%;
  }

  .contact_us_6 .container-block.form-wrapper {
    margin-top: 80px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .text-blk.input-title {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .contact_us_6 .form-box {
    padding-top: 0px;
    padding-right: 20px;
    padding-bottom: 0px;
    padding-left: 20px;
  }

  .contact_us_6 .container-block.form-wrapper {
    padding-top: 50px;
    padding-right: 15px;
    padding-bottom: 50px;
    padding-left: 15px;
  }

  .contact_us_6 .mob-text {
    display: block;
  }

  .contact_us_6 .responsive-container-block.container {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .contact_us_6 .form-box {
    margin-top: 200px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .container-block.form-wrapper {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .form-box {
    margin-top: 220px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .form-box {
    margin-top: 220px;
    margin-right: 0px;
    margin-bottom: 50px;
    margin-left: 0px;
  }

  .contact_us_6 .text-blk.contactus-head {
    font-size: 32px;
    line-height: 40px;
  }
}

@media (max-width: 500px) {
  .contact_us_6 .container-block.form-wrapper {
    padding-top: 50px;
    padding-right: 15px;
    padding-bottom: 50px;
    padding-left: 15px;
  }

  .contact_us_6 .container-block.form-wrapper {
    margin-top: 60px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .responsive-cell-block.wk-ipadp-6.wk-tab-12.wk-mobile-12.wk-desk-6 {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 15px;
    margin-left: 0px;
  }

  .contact_us_6 .responsive-container-block {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 35px;
    margin-left: 0px;
  }

  .contact_us_6 .text-blk.input-title {
    font-size: 12px;
  }

  .contact_us_6 .text-blk.contactus-head {
    font-size: 26px;
    line-height: 35px;
  }

  .contact_us_6 .input {
    height: 45px;
  }

}

/* responsive css */
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');

*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  margin: 0;
}

.wk-desk-1 {
  width: 8.333333%;
}

.wk-desk-2 {
  width: 16.666667%;
}

.wk-desk-3 {
  width: 25%;
}

.wk-desk-4 {
  width: 33.333333%;
}

.wk-desk-5 {
  width: 41.666667%;
}

.wk-desk-6 {
  width: 50%;
}

.wk-desk-7 {
  width: 58.333333%;
}

.wk-desk-8 {
  width: 66.666667%;
}

.wk-desk-9 {
  width: 75%;
}

.wk-desk-10 {
  width: 83.333333%;
}

.wk-desk-11 {
  width: 91.666667%;
}

.wk-desk-12 {
  width: 100%;
}

@media (max-width: 1024px) {
  .wk-ipadp-1 {
    width: 8.333333%;
  }

  .wk-ipadp-2 {
    width: 16.666667%;
  }

  .wk-ipadp-3 {
    width: 25%;
  }

  .wk-ipadp-4 {
    width: 33.333333%;
  }

  .wk-ipadp-5 {
    width: 41.666667%;
  }

  .wk-ipadp-6 {
    width: 50%;
  }

  .wk-ipadp-7 {
    width: 58.333333%;
  }

  .wk-ipadp-8 {
    width: 66.666667%;
  }

  .wk-ipadp-9 {
    width: 75%;
  }

  .wk-ipadp-10 {
    width: 83.333333%;
  }

  .wk-ipadp-11 {
    width: 91.666667%;
  }

  .wk-ipadp-12 {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .wk-tab-1 {
    width: 8.333333%;
  }

  .wk-tab-2 {
    width: 16.666667%;
  }

  .wk-tab-3 {
    width: 25%;
  }

  .wk-tab-4 {
    width: 33.333333%;
  }

  .wk-tab-5 {
    width: 41.666667%;
  }

  .wk-tab-6 {
    width: 50%;
  }

  .wk-tab-7 {
    width: 58.333333%;
  }

  .wk-tab-8 {
    width: 66.666667%;
  }

  .wk-tab-9 {
    width: 75%;
  }

  .wk-tab-10 {
    width: 83.333333%;
  }

  .wk-tab-11 {
    width: 91.666667%;
  }

  .wk-tab-12 {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .wk-mobile-1 {
    width: 8.333333%;
  }

  .wk-mobile-2 {
    width: 16.666667%;
  }

  .wk-mobile-3 {
    width: 25%;
  }

  .wk-mobile-4 {
    width: 33.333333%;
  }

  .wk-mobile-5 {
    width: 41.666667%;
  }

  .wk-mobile-6 {
    width: 50%;
  }

  .wk-mobile-7 {
    width: 58.333333%;
  }

  .wk-mobile-8 {
    width: 66.666667%;
  }

  .wk-mobile-9 {
    width: 75%;
  }

  .wk-mobile-10 {
    width: 83.333333%;
  }

  .wk-mobile-11 {
    width: 91.666667%;
  }

  .wk-mobile-12 {
    width: 100%;
  }
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
                            <a href="/aboutus" class="nav-item nav-link">{{ __('landingpage.About') }}</a>
                            <a href="/" class="nav-item nav-link">{{ __('landingpage.Service') }}</a>
                            <a href="/contactus" class="nav-item nav-link active">{{ __('landingpage.Contact') }}</a>
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

    <div class="contact_us_6">
      <div class="responsive-container-block container">
      <form class="form-box" id="contact-form">
      <div class="container-block form-wrapper">
        <div class="mob-text">
          <p class="text-blk contactus-head">
            {{ __('contact.Get in Touch') }}
          </p>
        </div>
        <div class="responsive-container-block" id="i2cbk">
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
            <p class="text-blk input-title">
              {{ __('contact.NAME') }}
            </p>
            <input class="input" id="ijowk-3" name="FirstName" placeholder="{{ __('contact.Please enter first name...') }}">
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
            <p class="text-blk input-title">
              {{ __('contact.EMAIL') }}
            </p>
            <input class="input" id="ipmgh-3" name="Email" placeholder="{{ __('contact.Please enter email...') }}">
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
            <p class="text-blk input-title">
              {{ __('contact.WHAT DO YOU HAVE IN MIND ?') }}
            </p>
            <textarea class="textinput" id="i5vyy-3" placeholder="{{ __('contact.Please enter query...') }}"></textarea>
          </div>
        </div>
        <button type="button" class="submit-btn" id="w-c-s-bgc_p-1-dm-id-2" onclick="sendToWhatsApp()">
          {{ __('contact.Submit') }}
        </button>
      </div>
    </form>
    <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
      <div class="map-part">
        <p class="text-blk map-contactus-head" id="w-c-s-fc_p-1-dm-id">
          {{ __('contact.Reach us at') }}
        </p>
        <div class="social-media-links mob">
    <!-- Gmail Icon -->
    <a class="social-icon-link" href="mailto:marketingzzf@gmail.com" id="gmail-link">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 112c-8.8 0-16 7.2-16 16l0 22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1l0-22.1c0-8.8-7.2-16-16-16L64 112zM48 212.2L48 384c0 8.8 7.2 16 16 16l384 0c8.8 0 16-7.2 16-16l0-171.8L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64l384 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128z"/></svg>
    </a>


    <!-- WhatsApp Icon -->
    <a class="social-icon-link" href="https://wa.me/6285711206369" id="whatsapp-link">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" fill="#000000"/>
        </svg>
    </a>


<!-- Instagram Icon -->
<a class="social-icon-link" href="https://www.instagram.com/zzf.indonesia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" id="instagram-link">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
</a>

<!-- Instagram Icon -->
<a class="social-icon-link" href="https://www.facebook.com/ChinaConnection">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg></a>
</a>
</div>


        <!-- Maps Section Start -->
        <div class="map-container">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15862.890643366543!2d106.7790809!3d-6.3001268!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e2e9369a41%3A0xcd14bc0286747fbb!2sZZF%20Industri%20Indonesia.%20PT!5e0!3m2!1sid!2sid!4v1731385274141!5m2!1sid!2sid"
        frameborder="0" allowfullscreen>
    </iframe>
</div>

<!-- Maps Section End -->
  </div>
</div>
</div>
</div>

</body>
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
                    <a href="mailto:marketingzzf@gmail.com"><i class="fas fa-envelope me-2"></i> marketingzzf@gmail.com</a>
                    <a href="tel:+"><i class="fas fa-phone me-2"></i> +62  812-9340-8484</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
  function sendToWhatsApp() {
    var name = document.getElementById('ijowk-3').value;
    var email = document.getElementById('ipmgh-3').value;
    var message = document.getElementById('i5vyy-3').value;
    
    var whatsappURL = "https://wa.me/6281293408484?text=";
    var text = "Name: " + encodeURIComponent(name) + "%0A" +
               "Email: " + encodeURIComponent(email) + "%0A" +
               "Message: " + encodeURIComponent(message);
    
    window.open(whatsappURL + text, "_blank");
  }
</script>
</html>
