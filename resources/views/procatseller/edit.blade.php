@extends('dashboardseller.master')
@section('nav')
      @include('dashboardseller.nav')
@endsection
@section('page', 'Product Categories/ Edit')
@section('main')
      @include('dashboardseller.main')

 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Form Product Categories</h6>
              <hr class="">
            </div>
            <div class="card-body px-0 pt-0 pb-2">

            <!-- FORM -->
              <div class="table-responsive p-0">
                <div class="card border-1 m-3 pt-3">
                <form action="{{route('procatseller.update', $procatseller)}}" method="POST" id="frmprocatSeller">
                @method('PUT')
                @csrf
                     <div class="mb-3 ms-3 me-3">
                      <label for="level" class="form-label">Category</label>
                      <select class="form-select" aria-label="Default select example" id="roles" name="kategori" required>
                        <option selected disabled>Pilih Kategori</option>
                        <option value="tower_crane" {{ old('kategori', $procatseller->kategori) == 'tower_crane' ? 'selected' : '' }}>Tower Crane</option>
                        <option value="passenger_hoist" {{ old('kategori', $procatseller->kategori) == 'passenger_hoist' ? 'selected' : '' }}>Passenger Hoist</option>
                        <option value="form_work" {{ old('kategori', $procatseller->kategori) == 'form_work' ? 'selected' : '' }}>Form Work</option>
                        <option value="scaffolding" {{ old('kategori', $procatseller->kategori) == 'scaffolding' ? 'selected' : '' }}>Scaffolding</option>
                        <option value="placing_boom" {{ old('kategori', $procatseller->kategori) == 'placing_boom' ? 'selected' : '' }}>Placing Boom</option>
                        <option value="safety_net" {{ old('kategori', $procatseller->kategori) == 'safety_net' ? 'selected' : '' }}>Safety Net</option>
                        <option value="concrete_pump" {{ old('kategori', $procatseller->kategori) == 'concrete_pump' ? 'selected' : '' }}>Concrete Pump</option>
                        <option value="concrete_batching_plant" {{ old('kategori', $procatseller->kategori) == 'concrete_batching_plant' ? 'selected' : '' }}>Concrete Batching Plant</option>
                        <option value="mobile_crane" {{ old('kategori', $procatseller->kategori) == 'mobile_crane' ? 'selected' : '' }}>Mobile Crane</option>
                      </select>
                     </div>
                     
                     <label for="sellers_id" class="form-label"></label>
                            <input type="text" class="form-control" id="sellers_id" name="sellers_id" value="{{ Auth::user()->id }}" hidden>
                       
                <div class="row ms-3 me-3 justify-content-end">
                <div class="col-3">
                    <a href="{{ route('procatseller.index') }}" class="btn bg-gradient-secondary w-100">Cancel</a>
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
      const form = document.getElementById("frmprocatseller")
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
