@extends('dashboard.master')
@section('nav')
    @include('dashboard.nav')
@endsection

@section('page', 'Profile Details')

@section('main')
    @include('dashboard.main')

    <style>
        .btn-custom {
            width: 100%;
            margin-bottom: 10px;
        }

        .btn-group-custom {
            display: flex;
            justify-content: space-between;
        }

        .btn-group-custom .btn {
            flex: 1;
            margin-right: 10px;
        }

        .btn-group-custom .btn:last-child {
            margin-right: 0;
        }

        .btn-group-custom .btn {
            width: 100%;
        }

        .sidebar {
            position: fixed;
            right: 0;
            top: 0;
            width: 300px;
            height: 100%;
            background-color: white;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
            z-index: 1000;
        }

        .sidebar.active {
            transform: translateX(0);
        }

        .cart-item-list {
            padding: 20px;
            list-style-type: none;
        }

        .cart-item-list li {
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }

        .btn-danger {
            margin-top: 10px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .table .table {
            background-color: #fff;
        }

        .input-group .form-control {
            width: 20px;
            height: 40px;
            text-align: center;
        }

        .input-group-prepend .btn,
        .input-group-append .btn {
            height: 50px;
        }

        .input-group-prepend .btn,
        .input-group-append .btn {
            display: none;
        }

        /* Custom Styles */
        .customer-info {
            text-align: left;
            font-size: 1.1em;
            margin: 0 auto;
            max-width: 600px;
        }

        .customer-info p {
            margin-bottom: 15px;
        }

        /* Center section content */
        .page-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .section-heading {
            font-size: 2em;
        }

        .section-subheading {
            font-size: 1.2em;
        }
    </style>

    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h1 class="mt-4">Profile Details</h1>
                </div>
            </div>

            <div class="row mt-4 justify-content-center">
                <div class="col-md-2 text-center">
                    <i class="fas fa-user fa-5x me-2"></i>
                </div>
                <div class="col-md-10 align-self-center">
                    <div class="customer-info">
                        <p><strong>Name :</strong> {{ $user->name }}</p>
                        <p><strong>Email :</strong> {{ $user->email }}</p>
                        <p><strong>Password Account :</strong> {{ $user->password }}</p>
                        <p><strong>Role :</strong> {{ $user->roles }}</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4 justify-content-center">
                <div class="col-md-6">
                    <a href="/dashboard" type="button" class="btn btn-info">
                        <i class="fas fa-arrow-left me-2"></i>Back To Dashboard Page
                    </a>
                </div>
            </div>
        </div>

        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; ZZF Industry</div>
                </div>
            </div>
        </footer>
    </div>
@endsection
