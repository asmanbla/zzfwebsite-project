@extends('dashboardseller.master')
@section('nav')
      @include('dashboardseller.nav')
@endsection
@section('page', 'Payment Rent / Edit')
@section('main')
      @include('dashboardseller.main')

 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Form Payment Rent </h6>
              <hr class="">
            </div>
            <div class="card-body px-0 pt-0 pb-2">

            <!-- FORM -->
              <div class="table-responsive p-0">
                <div class="card bsewa-1 m-3 pt-3">
                <form action="{{route('paymentsewaseller.update', $paymentsewaseller)}}" method="POST" id="frmpaymentsewaseller">
                @method('PUT')
                @csrf
               
                <div class="mb-3 ms-3 me-3">
    <label for="sewa_sellers_id" class="form-label">ID Order</label>
    <select name="sewa_sellers_id" id="sewa_sellers_id" class="form-control" required>
        <option value="{{ $paymentsewaseller->sewa_sellers_id ?? old('sewa_sellers_id') }}">
            {{ $paymentsewaseller->sewa_sellers->id ?? 'Pilih Id sewa' }}
        </option>
        @foreach($sewaseller as $oi)
            <option value="{{ $oi->id }}" {{ $paymentsewaseller->sewa_sellers_id == $oi->id ? 'selected' : '' }}>
                {{ $oi->id }}
            </option>
        @endforeach
    </select>
</div>
<div class="mb-3 ms-3 me-3">
                        <label for="payment_date" class="form-label">Payment Date</label>
                        <input type="text" id="payment_date" name="payment_date" class="form-control" placeholder="Enter Your payment_date" aria-label="payment_date" required value="{{$paymentsewaseller->payment_date ?? old('payment_date')}}">
                     </div>
                     
                     <div class="mb-3 ms-3 me-3">
                      <label for="level" class="form-label">Payment Method</label>
                      <select class="form-select" aria-label="Default select example" id="payment_method" name="payment_method" required>
                        <option selected disabled>Pilih Metode Pembayaran</option>
                        <option value="Cash" {{ old('payment_method', $paymentsewaseller->payment_method) == 'Cash' ? 'selected' : '' }}>Cash</option>
                        <option value="Transfer" {{ old('payment_method', $paymentsewaseller->payment_method) == 'Transfer' ? 'selected' : '' }}>Transfer</option>
                        <option value="Qris" {{ old('payment_method', $paymentsewaseller->payment_method) == 'Qris' ? 'selected' : '' }}>Qris</option>
                      </select>
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" id="amount" name="amount" class="form-control" placeholder="Enter Your amount" aria-label="amount" required value="{{$paymentsewaseller->amount ?? old('amount')}}">
                     </div>
                     <label for="sellers_id" class="form-label"></label>
                            <input type="text" class="form-control" id="sellers_id" name="sellers_id" value="{{ Auth::user()->id }}" hidden>
                <div class="row ms-3 me-3 justify-content-end">
                <div class="col-3">
                    <a href="{{ route('paymentsewaseller.index') }}" class="btn bg-gradient-secondary w-100">Cancel</a>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn bg-gradient-danger w-100" id="save">Save</button>
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
      const form = document.getElementById("frmpaymentsewaseller")
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
