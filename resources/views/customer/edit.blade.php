@extends('dashboard.master')
@section('nav')
      @include('dashboard.nav')
@endsection
@section('page', 'Customers / Edit')
@section('main')
      @include('dashboard.main')

 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Customer Form</h6>
              <hr class="">
            </div>
            <div class="card-body px-0 pt-0 pb-2">

            <!-- FORM -->
              <div class="table-responsive p-0">
                <div class="card border-1 m-3 pt-3">
                <form action="{{ route('customer.update', $customer->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="mb-3 ms-3 me-3">
                        <label type="nama" class="form-label">Nama Customer</label>
                        <input type="text" name="name" id="nama" class="form-control" placeholder="masukkan nama anda" aria-label="name" required value="{{$customer->name ?? old('name')}}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="masukkan email anda" aria-label="email" required value="{{$customer->email ?? old('email')}}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="password"class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="masukkan password anda" aria-label="password" required value="{{$customer->password ?? old('password')}}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="number"class="form-label">Nomor Telephone</label>
                        <input type="numeber" id="phone" name="phone" class="form-control" placeholder="masukkan nomor telephone anda" aria-label="phone" required value="{{$customer->phone ?? old('phone')}}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="address"class="form-label">Address 1</label>
                        <input type="address" id="address1" name="address1" class="form-control" placeholder="masukkan address pertama anda" aria-label="address1" required value="{{$customer->address1 ?? old('address1')}}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label type="address"class="form-label">Address 2</label>
                        <input type="address" id="address2" name="address2" class="form-control" placeholder="masukkan address kedua anda" aria-label="address2" required value="{{$customer->address2 ?? old('address2')}}">
                     </div>
                <div class="row ms-3 me-3 justify-content-end">
                <div class="col-3">
                    <a href="{{ route('customer.index') }}" class="btn bg-gradient-secondary w-100">Cancel</a>
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