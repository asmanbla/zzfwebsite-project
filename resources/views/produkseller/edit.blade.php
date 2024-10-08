@extends('dashboardseller.master')
@section('nav')
      @include('dashboardseller.nav')
@endsection
@section('page', 'Produk Seller / Edit')
@section('main')
      @include('dashboardseller.main')

 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Edit Produk</h6>
              <hr class="">
            </div>
            <div class="card-body px-0 pt-0 pb-2">

<!-- FORM -->
<div class="table-responsive p-0">
                <div class="card border-2 m-4 pt-4">
                <form action="{{ route('produkseller.update', $produkseller->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="mb-3 ms-3 me-3">
                        <label for="product_category_id" class="form-label">Product Category</label>
                        <select name="product_category_id" id="product_category_id" class="form-control" required>
                            <option value="">value="{{$produkseller->product_category_id ??old('product_category_id')}}"</option>
                            @foreach($procatseller as $pc)
                                <option value="{{ $pc->id }}">{{ $pc->kategori }}</option>
                            @endforeach
                        </select>
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Enter Your product name" aria-label="product_name" required value="{{$produkseller->product_name ?? old('product_name')}}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" id="description" name="description" class="form-control" placeholder="Enter Your description" aria-label="description" required value="{{$produkseller->description ?? old('description')}}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" id="price" name="price" class="form-control" placeholder="Enter Your price" aria-label="price" required value="{{$produkseller->price ?? old('price')}}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label for="stok_quantity" class="form-label">Stock Quantity</label>
                        <input type="number" id="stok_quantity" name="stok_quantity" class="form-control" placeholder="Enter Your stock quantity" aria-label="stok_quantity" required value="{{$produkseller->stok_quantity ?? old('stok_quantity')}}">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label for="image1_url" class="form-label">Image 1</label>
                        <img src="{{ asset('storage/' . $produkseller->image1_url) }}" class="img-thumbnail d-block" alt="Image 1" width="150">
                        <input type="file" class="form-control" id="foto2" name="image1_url">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label for="image2_url" class="form-label">Image 2</label>
                        <img src="{{ asset('storage/' . $produkseller->image2_url) }}" class="img-thumbnail d-block" alt="Image 1" width="150">
                        <input type="file" class="form-control" id="foto2" name="image2_url">
                     </div>
                     <div class="mb-3 ms-3 me-3">
                        <label for="image3_url" class="form-label">Image 3</label>
                        <img src="{{ asset('storage/' . $produkseller->image3_url) }}" class="img-thumbnail d-block" alt="Image 1" width="150">
                        <input type="file" class="form-control" id="foto2" name="image3_url">
                     </div>
                     <div class="row ms-3 me-3 justify-content-end">
                        <div class="col-3">
                            <a href="{{ route('produkseller.index') }}" class="btn bg-gradient-secondary w-100">Cancel</a>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn bg-gradient-danger w-100" id="save">Save</button>
                        </div>
                    </div>
                </form>
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
@endsection
