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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nomor Telephone</th>
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
                                    <td class="text-center">
                                        <div class="btn-group me-2">
                                        <a href="{{route('customer.edit',$data)}}"  class="btn btn-secondary btn btn-outline-primar btn-sm">Edit</a>
                                        <a href="/hapuscust/{{$data->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
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