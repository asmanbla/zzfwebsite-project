@extends('dashboardseller.master')

@section('nav')
    @include('dashboardseller.nav')
@endsection

@section('page', 'Payment Page')

@section('main')
    @include('dashboardseller.main')

    

    <!-- Table -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Payment Data</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Order ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Rent ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Payment Date</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Payment Method</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Amount</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payments as $idx => $data)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    {{ $idx + 1 }}
                                                </div>
                                            </td>
                                            <td>
                                                {{ $data->order_sellers_id ?? '-' }} <!-- Menampilkan '-' jika null -->
                                            </td>
                                            <td>
                                                {{ $data->sewa_sellers_id ?? '-' }} <!-- Menampilkan '-' jika null -->
                                            </td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($data->payment_date)->format('d-m-Y') }} <!-- Format tanggal -->
                                            </td>
                                            <td>
                                                {{ $data->payment_method }}
                                            </td>
                                            <td>
                                                Rp{{ number_format($data->amount, 0, ',', '.') }} <!-- Format jumlah dengan mata uang -->
                                            </td>
                                            <td class="text-center">
                                            <div class="btn-group-wrapper">
                                                <a href="{{ route('payment.edit', $data->id) }}" class="btn btn-sm btn-edit">Edit</a>
                                                <form action="{{ route('payment.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this data?')">
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
                swal("Success", "{{ Session::get('success') }}", 'success', {
                    button: true,
                    button: "OK",
                    timer: 5000
                });
            </script>
        @endif
    </div>
@endsection
