@extends('dashboardseller.master')
@section('nav')
    @include('dashboardseller.nav')
@endsection
@section('page', 'Product Categories/ Create')
@section('main')
    @include('dashboardseller.main')

    <!-- Table -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Form Product Categories</h6>
                        <hr class="">
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">

                        <!-- FORM -->
                        <div class="table-responsive p-0">
                            <div class="card border-1 m-3 pt-3">
                                <form action='{{ route("procatseller.store") }}' method="post" id="frmprocatseller">
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @csrf
                                    <div class="mb-3 ms-3 me-3">
                                        <label for="kategori" class="form-label">Category</label>
                                        <select class="form-select" aria-label="Default select example" id="kategori" name="kategori">
                                            <option selected>Choose Category</option>
                                            <option value="tower_crane">Tower Crane</option>
                                            <option value="passenger_hoist">Passenger Hoist</option>
                                            <option value="form_work">Form Work</option>
                                            <option value="scaffolding">Scaffolding</option>
                                            <option value="placing_boom">Placing Boom</option>
                                            <option value="safety_net">Safety Net</option>
                                            <option value="concrete_pump">Conrete Pump</option>
                                            <option value="concrete_batching_plant">Concrete Bacthing Plant</option>
                                            <option value="mobile_crane">Mobile Crane</option>
                                        </select>
                                    </div>
                                    <label for="sellers_id" class="form-label"></label>
                            <input type="text" class="form-control" id="sellers_id" name="sellers_id" value="{{ Auth::user()->id }}" hidden>

                                    <div class="row ms-3 me-3 justify-content-end">
                                        <div class="col-3">
                                            <a href="{{ route('procatseller.index') }}" class="btn bg-gradient-secondary w-100">Cancel</a>
                                        </div>
                                        <div class="col-3">
                                            <button type="submit" class="btn bg-gradient-danger w-100" id="save">Save</button>
                                        </div>
                                          <!-- Readonly Field for sellers_id -->
                                </form>
                            </div>
                        </div>
                        <!-- END FORM -->

                        <!-- End Table -->
                        <footer class="footer pt-3">
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
                </div>
            </div>
        </div>
    </div>
@endsection
