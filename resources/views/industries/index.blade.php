@extends('main')
@section('content')

<div class="main_header_d d-none sticky-top">
@include('common.header')
</div>




@include('industries.industries_first_sec')

@include('industries.industries_content_sec')



@include('common.banner')
@include('common.contactus')
@include('common.footer')
@endsection