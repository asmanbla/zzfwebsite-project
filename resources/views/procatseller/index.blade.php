@extends('dashboardseller.master')
@section('nav')
      @include('dashboardseller.nav')
@endsection
@section('page', 'Kategori Produk')
@section('main')
      @include('dashboardseller.main')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <a href="{{ route('procatseller.create')}}"><span class="badge badge-sm bg-gradient-yellow mb-3 fs-6">Add New Product Category</span></a>
                    <h6>Kategori Produk</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Number</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($procatseller as $idx => $data)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            {{ $idx + 1 . '. ' }}
                                        </div>
                                    </td>
                                    <td>
                                        {{ $data->kategori }}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group me-2">
                                            <a href="{{ route('procatseller.edit', $data) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/hapusprocatseller/{{ $data->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
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
