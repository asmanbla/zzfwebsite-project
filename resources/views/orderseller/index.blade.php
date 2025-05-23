@extends('dashboardseller.master')
@section('nav')
      @include('dashboardseller.nav')
@endsection
@section('page', 'Order')
@section('main')
      @include('dashboardseller.main')

      <style>
/* Wrapper untuk memastikan tombol dalam satu baris */
.btn-group-wrapper {
    display: flex;
    gap: 5px; /* Jarak antara tombol */
    justify-content: center; /* Posisi tombol di tengah */
    align-items: center; /* Agar tombol sejajar secara vertikal */
}

/* Styling tambahan untuk tombol */
.btn-edit {
    background-color: #007bff; /* Warna tombol Edit */
    color: #ffffff;
}

.btn-danger {
    background-color: #dc3545; /* Warna tombol Delete */
    color: #ffffff;
    border: none;
}

/* Hover effect */
.btn-edit:hover, .btn-danger:hover {
    opacity: 0.9;
}

    </style>
 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Order</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Number</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Customer</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Order Date</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Amount</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">E</th>
                      <th class="text-secondary opacity-7"></th> -->
                    </tr>
                  </thead>
                  <tbody>
                         @foreach ($vworderseller as $idx => $data)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                                {{ $idx + 1 . '. ' }}
                                        </div>
                                    </td>
                                    <td>
                                      {{ $data->name->name }}
                                    </td>
                                    <td>
                                        {{ $data->order_date}}
                                    </td>
                                    <td>
                                    Rp{{ number_format($data->total_amount, 0, ',', '.') }}
                                    </td>
                                    <td>
                                        {{ $data->status}}
                                    </td>
                                    <td class="text-center">
                                      <div class="btn-group-wrapper">
                                          <a href="{{ route('orderseller.edit', $data) }}" class="btn btn-sm btn-edit">Edit</a>
                                          <form action="{{ route('orderseller.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this data?')">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                          </form>
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
    <input type="hidden" id="sts" class="form-control" value="@isset($status){{$status}}@endisset" />
    <input type="hidden" id="psn" class="form-control" value="@isset($status){{$pesan}}@endisset" />
    <script>
      const body = document.getElementById('master')
      const sts = document.getElementById("sts")
      const psn = document.getElementById("psn")
      function pesan_simpan(){
        if(sts.value === "simpan")
        swal("Good Job!", psn.value, "success")
      }
    {
      body.onload = function(){
        pesan_simpan()
      }
    }
    </script>
    @endsection