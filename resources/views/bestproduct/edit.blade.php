@extends('dashboard.master')
@section('nav')
      @include('dashboard.nav')
@endsection
@section('page', 'Best Product ZZF / Edit')
@section('main')
      @include('dashboard.main')

 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Best Product Form</h6>
              <hr class="">
            </div>
            <div class="card-body px-0 pt-0 pb-2">

           <!-- FORM EDIT -->
<div class="table-responsive p-0">
    <div class="card border-2 m-4 pt-4">
        <form action="{{ route('bestproduct.update', $bestproduct->id) }}" method="POST" id="frmproduct" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Method PUT untuk update -->
            <div class="mb-3 ms-3 me-3">
                        <label for="image_url" class="form-label">Product Image</label>
                        <img src="{{ asset('storage/' . $bestproduct->image_url) }}" class="img-thumbnail d-block" alt="Image" width="150">
                        <input type="file" class="form-control" id="foto2" name="image1_url">
                     </div>
            <div class="mb-3 ms-3 me-3">
                <label for="name" class="form-label">Name Of Product</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your company name" aria-label="name" value="{{ old('name', $bestproduct->name) }}" required>
            </div>
            <div class="mb-3 ms-3 me-3">
                <label for="description" class="form-label">Description Of Product</label>
                <textarea rows="5" name="description" id="description" class="form-control" placeholder="Enter the description of product" aria-label="description" required>{{ old('description', $bestproduct->description) }}</textarea>
            </div>  
            <div class="row ms-3 me-3 justify-content-end">
                <div class="col-3">
                    <a href="{{ route('bestproduct.index') }}" class="btn bg-gradient-secondary w-100">Cancel</a>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn bg-gradient-danger w-100" id="save">Save</button>
                </div>
            </div>
        </form>
    </div>
</div> 
<!-- END FORM EDIT -->


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
</script>

    @endsection