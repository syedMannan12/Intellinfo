@extends('main')
@section('content')

<div class="main_header_d d-none sticky-top">
@include('common.header')
</div>

@include('careers.first_sec')
@include('careers.open_positions')




@include('common.contactus')
@include('common.footer')
@endsection