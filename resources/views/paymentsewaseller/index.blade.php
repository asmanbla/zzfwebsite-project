@extends('dashboardseller.master')
@section('nav')
      @include('dashboardseller.nav')
@endsection
@section('page', 'Payment Rent')
@section('main')
      @include('dashboardseller.main')

 <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Payment Rent</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No. Sewa</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Bayar</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Metode Bayar</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jumlah</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">E</th>
                      <th class="text-secondary opacity-7"></th> -->
                    </tr>
                  </thead>
                  <tbody>
                         @foreach ($paymentsewaseller as $idx => $data)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                                {{ $idx + 1 . '. ' }}
                                        </div>
                                    </td>
                                    <td>
                                        {{ $data->sewa_sellers_id}}
                                    </td>
                                    <td>
                                        {{ $data->payment_date}}
                                    </td>
                                    <td>
                                        {{ $data->payment_method}}
                                    </td>
                                    <td>
                                        {{ $data->amount}}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group me-2">
                                            <a href="{{ route('paymentsewaseller.edit', $data) }}"  class="btn btn-sm btn-edit">Edit</a>
                                    <form action="{{ route('paymentsewaseller.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this data?')">
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

      <!-- End Table -->
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