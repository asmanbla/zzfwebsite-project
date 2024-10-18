@extends('dashboard.master')
@section('nav')
      @include('dashboard.nav')
@endsection
@section('page', 'Payment Order ZZF')
@section('main')
      @include('dashboard.main')


     <!-- Table -->
 <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <a href="{{ route('paymentorderszzf.create')}}"><span class="badge badge-sm bg-gradient-primary mb-3 fs-6">Add New Payments Order</span>
              <h6>Payment Pembelian</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Number</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Order Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Payment Date</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Payment Method</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Amount</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">E</th>
                      <th class="text-secondary opacity-7"></th> -->
                    </tr>
                  </thead>
                  <tbody>
    @foreach ($payments as $idx => $data)
        <tr>
            <td>
                <div class="d-flex px-2 py-1">
                    {{ $idx + 1 . '. ' }}
                </div>
            </td>
            <td>
                {{ $data->order_id }}
            </td>
            <td>
                {{ $data->payment_date }}
            </td>
            <td>
                {{ $data->payment_method }}
            </td>
            <td>
                {{ $data->amount }}
            </td>

            <td class="text-center">
                <div class="btn-group me-2">
                    <a href="{{ route('paymentorderszzf.edit', $data->id) }}"  class="btn btn-secondary btn-sm">Edit</a>
                    <a href="/hapuspaymentorderszzf/{{$data->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">Delete</a>
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