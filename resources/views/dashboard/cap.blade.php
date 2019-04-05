@extends('dashboard.index')
@include('dashboard.body')
@section('content') 
    @yield('header')
        @yield('body')
    @yield('footer')           
@endsection