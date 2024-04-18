

@extends('main')
@section('content')

<div class="main_header_d d-none sticky-top">
@include('common.header')
</div>


<section class="all_first_sections company_sec p-0">
    <div class="conatiner-fluid sticky-top trans_header">
    @include('common.header')
    </div>
    <div class="container mt-5 pt-5">
        <div class="row all_main_rows">
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12  d-flex align-items-center">
                <div>
                    
                    <h1>Company</h1>
                    <h4>With Leading Technology solutions.</h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-10  col-sm-12 d-flex align-items-center  pt-3">
            </div>
        </div>
    </div>
</section>

<section class="out_clients_sec">
    <div class="container">
        <div class="row">
        <!-- our_clients_slider -->
            <div class="col-12">
                <h2>Our Clients</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae reiciendis provident saepe, odit ratione quae minus magni, voluptas eveniet similique esse molestias qui doloribus veritatis mollitia perferendis sapiente repudiandae rerum.</p>
                <div class="our_clients_slider  mt-5 pt-5">

                    <div class="card">
                        <img src="{{URL::asset('/assets/images/company/Apple.png')}}" width="50%" alt="">
                    </div>
                    <div class="card">
                        <img src="{{URL::asset('/assets/images/company/Google.png')}}" width="50%" alt="">
                    </div>
                    <div class="card pt-3">
                        <img src="{{URL::asset('/assets/images/company/MIC.png')}}" width="50%" alt="">
                    </div>
                    <div class="card pt-3">
                        <img src="{{URL::asset('/assets/images/company/BB.png')}}" width="50%" alt="">
                    </div>
                    <div class="card pt-3">
                        <img src="{{URL::asset('/assets/images/company/MS.png')}}"  width="50%" alt="">
                    </div>
                    <div class="card pt-3">
                        <img src="{{URL::asset('/assets/images/company/WW.png')}}" width="50%" alt="">
                    </div>
                    <div class="card pt-4">
                        <img src="{{URL::asset('/assets/images/company/TT.png')}}" width="50%" alt="">
                    </div>
                    <div class="card pt-3">
                        <img src="{{URL::asset('/assets/images/company/GE.png')}}" width="50%" alt="">
                    </div> 
                    <div class="card pt-3">
                        <img src="{{URL::asset('/assets/images/company/kpImg.png')}}" width="50%" alt="">
                    </div>
                    <div class="card pt-3">
                        <img src="{{URL::asset('/assets/images/company/USL.png')}}" width="50%" alt="">
                    </div>
                    <div class="card pt-3">
                        <img src="{{URL::asset('/assets/images/company/JP.png')}}" width="50%" alt="">
                    </div>
                    <div class="card pt-3">
                        <img src="{{URL::asset('/assets/images/company/GS.png')}}" width="50%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="custom_software__Development">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Custom Software Development</h2>
                <p>At Intelli we specialise in custom software development services that are tailored to the unique needs of each of our clients. Our team of experts is proficient in the latest cloud services and mobile offerings, allowing us to provide innovative and effective solutions for businesses of all sizes. Whether you need a new mobile app, a custom cloud-based solution, or an integration between your existing systems, we have the expertise and experience to deliver high-quality results. Contact us today to learn more about our custom software development services and how we can help your business succeed.</p>

                <p> <span class="bg__color p-2"> For further details, please contact us for specific software we have developed and deployed successfully at a large global client </span></p>
            </div>
        </div>
    </div>
</section>

<section class="work__Approach">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Work Approach</h2>
                <p>At Intelli, we follow an agile software development approach that allows us to be flexible and responsive to our clients' needs throughout the development process. We also prioritize collaboration and communication with our clients, ensuring that they are involved and informed at every step of the way. Our goal is to deliver high-quality, innovative, and effective software solutions that help our clients achieve their business objectives.</p>
                <p>Our work approach and software development life cycle essentially involves the following approach</p>
                <ul>
                    <li>Discovery and Requirements Gathering</li>
                    <li>Design and Planning</li>
                    <li>Development</li>
                    <li>Testing and Quality Assurance</li>
                    <li>Deployment and Launch</li>
                    <li>Maintenance and Support</li>
                </ul>
            </div>
        </div>
    </div>
</section>




@include('common.banner')
@include('common.contactus')
@include('common.footer')
@endsection