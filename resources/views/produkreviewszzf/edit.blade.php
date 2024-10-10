@extends('dashboard.master')
@section('nav')
      @include('dashboard.nav')
@endsection
@section('page', 'Produk Review ZZF / Edit')
@section('main')
      @include('dashboard.main')

 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Create Review Produk ZZF Edit</h6>
              <hr class="">
            </div>
            <div class="card-body px-0 pt-0 pb-2">

            <!-- FORM -->
              <div class="table-responsive p-0">
                <div class="card border-1 m-3 pt-3">
                <form action='{{route("produkreviewszzf.update")}}' method="post" id="frmRvw">
                  @csrf
                  <div class="mb-3 ms-3 me-3">
                        <label for="customers_id" class="form-label">Customer Name (Id)</label>
                        <select name="customers_id" id="customers_id" class="form-control" required>
                        <option value="{{ $produkreviewszzf->customers_id ?? old('customers_id') }}">
                        {{ $produkreviewszzf->customer->name ?? 'Pilih Pelanggan' }} 
                        </select>
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label for="products_id" class="form-label">Produk Name (Id)</label>
                        <select name="products_id" id="products_id" class="form-control" required>
                        <option value="{{ $produkreviewszzf->products_id ?? old('products_id') }}">
                        {{ $produkreviewszzf->produkzzf->name ?? 'Pilih Produk' }} 
                        </select>
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="rating" class="form-label">Ratting</label>
                        <input type="number" name="rating" id="rating" class="form-control" placeholder="input Ratting" aria-label="rating" required value="{{ $produkreviewszzf->rating ?? old('rating') }}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="comment"class="form-label">Komentar</label>
                        <input type="text" id="comment" name="comment" class="form-control" placeholder="masukkan komentar anda" aria-label="total_amount" required value="{{ $produkreviewszzf->comment ?? old('comment') }}">
                     </div>
                <div class="row ms-3 me-3 justify-content-end">
                <div class="col-3">
                    <a href="{{ route('produkreviewszzf.index') }}" class="btn bg-gradient-secondary w-100">Cancel</a>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn bg-gradient-danger w-100"id="save">Save</button>
                </div>
             </div>
          </div>
          </div> 

        <!-- END FORM -->

      <!-- End Table -->
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script>
      const btnSimpan = document.getElementById("save")
      const nama = document.getElementById("nama")
      const pswd = document.getElementById("password")
      const lvl = document.getElementById("level")
      const form = document.getElementById("frmUser")
      let pesan = ""
      function simpan(){
        if(nama.value === ""){
          nama.focus()
            swal("Incomplete data", "Nama must be filled!", "error")
        }else if(pswd.value === ""){
          pswd.focus()
        swal("Incomplete data", "Password must be filled!", "error")
        }else if(lvl.value === ""){
          lvl.focus()
          swal("Incomplete data", "Level must be filled!", "error")
        }else{
          form.submit()
        }
          
      }
      btnSimpan.onclick = function(){
        simpan()
      }
    </script>
    @endsection