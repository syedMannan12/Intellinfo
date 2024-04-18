@extends('main')
@section('content')

<div class="main_header_d d-none sticky-top">
@include('common.header')
</div>


<section class="about_first_sec p-0">
    <div class="conatiner-fluid sticky-top trans_header">
    @include('common.header')
    </div>
    <div class="container mt-5 pt-5">
        <div class="row all_main_rows">
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12  d-flex align-items-center">
                <div>
                    
                    <h2>About Us</h2>
                    <h4>Welcome to Intelli InfoTech inc a leading provider of cutting-edge technology solutions for businesses of all sizes.</h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-10  col-sm-12 d-flex align-items-center  pt-3">
            </div>
        </div>
    </div>
</section>


<section class="aboutUsConSec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About Us</h2>
                <p>Welcome to Intelli InfoTech inc a leading provider of cutting-edge technology solutions for businesses of all sizes. Our mission is to help our clients leverage the latest technologies to achieve their goals and stay ahead of the competition.</p>
                <p>Founded in 2013, Intelli InfoTech inc has a long history of innovation and excellence. Our team of experienced technology experts has a proven track record of delivering custom solutions that meet the unique needs of our clients. We specialize in a wide range of technologies, including cloud computing, cyber security, artificial intelligence, and more.</p>
                <p>At Intelli InfoTech inc, we believe that technology should be easy to use and accessible to everyone. That's why we work closely with our clients to understand their needs and goals, and we tailor our solutions to meet their specific requirements. Whether you're a small business looking to streamline your operations or a large enterprise looking to scale your infrastructure, we have the expertise to help you succeed.</p>
                <p>Our team is comprised of talented professionals from diverse backgrounds, including software development, engineering, data science, and more. We are dedicated to staying up-to-date with the latest industry trends and technologies, so that we can provide our clients with the most effective solutions possible.</p>
                <p>At Intelli InfoTech inc, we value our clients above all else. We believe that building strong relationships with our clients is the key to our success. That's why we are committed to providing exceptional customer service and support, and to working closely with our clients every step of the way.</p>
                <p>Thank you for considering Intelli InfoTech inc for your technology needs. We look forward to the opportunity to work with you and help your business thrive in the digital age.</p>
            </div>
        </div>
    </div>
</section>



@include('common.banner')
@include('common.contactus')
@include('common.footer')
@endsection