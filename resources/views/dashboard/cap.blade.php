@extends('dashboard.index')
@include('dashboard.body')
@section('content') 
@if (session('status')) <div class="alert alert-success" role="alert">{{ session('status') }} </div>@endif
    @yield('header')
        @yield('body')
    @yield('footer')           
@endsection