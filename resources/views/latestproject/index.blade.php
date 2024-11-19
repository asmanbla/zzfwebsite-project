@extends('dashboard.master')
@section('nav')
      @include('dashboard.nav')
@endsection
@section('page', 'Last Project Zzf')
@section('main')
      @include('dashboard.main')

 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <a href="{{ route('latestproject.create')}}"><span class="badge badge-sm bg-gradient-primary mb-3 fs-6">Add New Latest Project Data</span>
              <h6>Latest Project</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pict Of Product</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name Of Project</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
    @foreach ($latestproject as $idx => $data)
        <tr>
            <td>
                <div class="d-flex px-2 py-1">
                    {{ $idx + 1 . '. ' }}
                </div>
            </td>
            <td>
              @if($data->image_url)
                  <img src="{{ asset('storage/'.$data->image_url) }}" class="img-thumbnail" style="width: 180px; height: 100px; object-fit: cover;">
              @else
                  <p>No image</p>
              @endif
          </td>
            <td>
                {{ $data->project_name }}
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
            <td class="text-center">
                <div class="btn-group me-2">
                    <a href="/hapuslatestproject/{{$data->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
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
    @endsection
