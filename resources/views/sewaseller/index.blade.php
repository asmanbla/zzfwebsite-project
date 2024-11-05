@extends('dashboardseller.master')
@section('nav')
      @include('dashboardseller.nav')
@endsection
@section('page', 'Rent')
@section('main')
      @include('dashboardseller.main')

 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Rent</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Number</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Customer</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Rent Date</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">E</th>
                      <th class="text-secondary opacity-7"></th> -->
                    </tr>
                  </thead>
                  <tbody>
                         @foreach ($vwsewaseller as $idx => $data)
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
                                        <div class="btn-group me-2">
                                            <a href="{{ route('sewaseller.edit', $data) }}"  class="btn btn-sm btn-edit">Edit</a>
                                    <form action="{{ route('sewaseller.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this data?')">
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
    @endsection