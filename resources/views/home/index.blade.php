@extends('main')
@section('content')

<div class="main_header_d d-none sticky-top">
@include('common.header')
</div>




@include('home.home_first_sec')
@include('home.about_us')
@include('home.ourservices')
@include('home.industries')


@include('common.banner')
@include('common.contactus')
@include('common.footer')
@endsection