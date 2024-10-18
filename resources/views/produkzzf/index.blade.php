@extends('dashboard.master')
@section('nav')
      @include('dashboard.nav')
@endsection
@section('page', 'Product ZZF')
@section('main')
      @include('dashboard.main')


     <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <a href="{{ route('produkzzf.create')}}"><span class="badge badge-sm bg-gradient-primary mb-3 fs-6">Add New Product</span>
              <h6>Produk</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Kategori</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stok</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Foto1</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Foto2</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Foto3</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">E</th>
                      <th class="text-secondary opacity-7"></th> -->
                    </tr>
                  </thead>
                  <tbody>
    @foreach ($vwprodukzzf as $idx => $data)
        <tr>
            <td>
                <div class="d-flex px-2 py-1">
                    {{ $idx + 1 . '. ' }}
                </div>
            </td>
            <td>
                {{ $data->product_category_id ?? 'No category' }}
            </td>
            <td>
                {{ $data->kategori }}
            </td>
            <td>
                {{ $data->product_name }}
            </td>
            <td>
                {{ $data->description }}
            </td>
            <td>
                {{ $data->price }}
            </td>
            <td>
                {{ $data->stok_quantity }}
            </td>
            <td>
              @if($data->image1_url)
                  <img src="{{ asset('storage/'.$data->image1_url) }}" class="img-thumbnail" style="width: 200px; height: 100px; object-fit: cover;">
              @else
                  <p>No image</p>
              @endif
          </td>
          <td>
              @if($data->image2_url)
                  <img src="{{ asset('storage/'.$data->image2_url) }}" class="img-thumbnail" style="width: 200px; height: 100px; object-fit: cover;">
              @else
                  <p>No image</p>
              @endif
          </td>
          <td>
              @if($data->image3_url)
                  <img src="{{ asset('storage/'.$data->image3_url) }}" class="img-thumbnail" style="width: 200px; height: 100px; object-fit: cover;">
              @else
                  <p>No image</p>
              @endif
          </td>

            <td class="text-center">
                <div class="btn-group me-2">
                    <a href="{{ route('produkzzf.edit', $data->id) }}"  class="btn btn-secondary btn-sm">Edit</a>
                    <a href="/hapusprodukzzf/{{$data->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">Delete</a>
                </div>
            </td>
        </tr>
    @endforeach
</tbody>
                    </table>
              </div>
            </div>
          </div>
        </div>
      </div>  
      @if (Session::has('sukses'))
    <script>
      swal("Sukses", "{{ Session::get('sukses') }}", 'success', {
          button:true,
          button:"OK",
          timer:5000
      });
    </script>
    @endif

      <!-- End Table -->
      
    @endsection