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
              <h6>All Product Data</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Categories</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image 1</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image 2</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image 3</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Purchase Price</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Rent Price</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stock Quantity</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Owners</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">E</th>
                      <th class="text-secondary opacity-7"></th> -->
                    </tr>
                  </thead>
                  <tbody>
    @foreach ($vwprodukseller as $idx => $data)
        <tr>
            <td>
                <div class="d-flex px-2 py-1">
                    {{ $idx + 1 . '. ' }}
                </div>
            </td>
            <td>
                {{ $data->kategori }}
            </td>
            <td>
                {{ $data->product_name }}
            </td>
            <td>
                @php
                    // Pisahkan deskripsi menjadi array kata
                    $words = explode(' ', $data->description);
                    $lines = [];
                    $line = '';

                    foreach ($words as $index => $word) {
                        $line .= $word . ' ';
                        if (($index + 1) % 5 == 0) {
                            $lines[] = trim($line);
                            $line = '';
                        }
                    }

                    if (!empty($line)) {
                        $lines[] = trim($line);
                    }
                @endphp

                @foreach($lines as $line)
                    {{ $line }}<br>
                @endforeach
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
          <td>
                {{ $data->purchase_price }}
        ` </td>
          <td>
                {{ $data->rent_price }}
          </td>
          <td>
                {{ $data->stok_quantity }}
          </td>
          <td>
                {{ $data->type }}
          </td>
          <td>
                {{ $data->name }}
          </td>

            <td class="text-center">
                <div class="btn-group me-2">
                    <a href="/hapusprodukall/{{$data->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
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
      @if (Session::has('success'))
    <script>
      swal("success", "{{ Session::get('success') }}", 'success', {
          button:true,
          button:"OK",
          timer:5000
      });
    </script>
    @endif

      <!-- End Table -->
      
    @endsection