@extends('dashboard.master')
@section('nav')
      @include('dashboard.nav')
@endsection
@section('page', 'Payment Order ZZF / Create')
@section('main')
      @include('dashboard.main')

 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Payment Order ZZF Form</h6>
              <hr class="">
            </div>
            <div class="card-body px-0 pt-0 pb-2">

            <!-- FORM -->
              <div class="table-responsive p-0">
                <div class="card border-1 m-3 pt-3">
                <form action='{{route("paymentorderszzf.store")}}' method="post" id="frmUser">
                  @csrf
                  <div class="mb-3 ms-3 me-3">
                        <label for="order_id" class="form-label">Order Number</label>
                        <select name="order_id" id="order_id" class="form-control" required>
                            <option value="">Nomor Order</option>
                            @foreach($orderid as $oi)
                                <option value="{{ $oi->id }}">{{ $oi->id }}</option>
                            @endforeach
                        </select>
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="payment_date" class="form-label">Payment Date</label>
                        <input type="date" name="payment_date" id="payment_date" class="form-control" placeholder="input tanggal order" aria-label="payment_date">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                      <label for="payment_method" class="form-label">Payment Method</label>
                      <select class="form-select" aria-label="Default select example" id="payment_method" name="payment_method" >
                        <option selected>Pilih Metode Pembayaran</option>
                        <option value="Cash">Cash</option>
                        <option value="Transfer">Transfer</option>
                        <option value="Qris">Qris</option>
                      </select>
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="password"class="form-label">Amount</label>
                        <input type="text" id="amount" name="amount" class="form-control" placeholder="masukkan total amount anda" aria-label="amount">
                     </div>
                <div class="row ms-3 me-3 justify-content-end">
                <div class="col-3">
                    <a href="{{ route('paymentorderszzf.index') }}" class="btn bg-gradient-secondary w-100">Cancel</a>
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