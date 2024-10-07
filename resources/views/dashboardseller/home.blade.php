@extends('dashboardseller.master') 
@section('title', 'Dashboardseller')
@section('nav')
    @include('dashboardseller.nav')
@endsection
@section('page', 'Dashboardseller')
@section('main')
    @include('dashboardseller.main')
    @include('dashboardseller.dashboard') 
@endsection 


    