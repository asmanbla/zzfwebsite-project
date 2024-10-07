@extends('dashboard.master')
@section('nav')
      @include('dashboard.nav')
@endsection
@section('page', 'Customer')
@section('main')
      @include('dashboard.main')

 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <a href="{{ route('customer.create')}}"><span class="badge badge-sm bg-gradient-primary mb-3 fs-6">Add New Item</span>
              <h6>Customers</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Password</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address 1</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address 2</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">E</th>
                      <th class="text-secondary opacity-7"></th> -->
                    </tr>
                  </thead>
                  <tbody>
                         @foreach ($customers as $idx => $data)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                                {{ $idx + 1 . '. ' }}
                                        </div>
                                    </td>
                                    <td>
                                         {{ $data->name }}
                                    </td>
                                    <td>
                                         {{ $data->email }}
                                    </td>                     
                                    <td>
                                        {{ $data->password }}
                                    </td>
                                    <td>
                                        {{ $data->phone }}
                                    </td>
                                    <td>
                                        {{ $data->address1 }}
                                    </td>
                                    <td>
                                        {{ $data->address2 }}
                                    </td>
                                    <td>
                                        <div class="btn-group me-2">
                                        <a href="{{route('customer.edit',$data)}}"  class="btn btn-secondary btn btn-outline-primar btn-sm">Edit</a>
                                        <a href="/hapuscust/{{$data->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">Hapus</a>
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