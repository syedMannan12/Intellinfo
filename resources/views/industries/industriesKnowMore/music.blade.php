@extends('main')
@section('content')

<div class="main_header_d d-none sticky-top">
    @include('common.header')
</div>




<section class="industries_music_sec industries_common_for_all p-0">
    <div class="conatiner-fluid sticky-top trans_header">
        @include('common.header')
    </div>
    <div class="container mt-5 pt-5">
        <div class="row all_main_rows">
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12  d-flex align-items-center">
                <div>

                    <h2>Music</h2>
                    <h4>Today�s music technology industry is developing at a rapid pace, penetrating all areas of human life.</h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-10  col-sm-12 d-flex align-items-center  pt-3">
            </div>
        </div>
    </div>
</section>
 

<section class="all_industries_content_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 left__p">
            <h2>Music</h2>
                <p>Today�s music technology industry is developing at a rapid pace, penetrating all areas of human life, from entertainment to professional audio editing software. More and more modern and challenging music technology projects are developed in the market.</p>
                <p>In recent years, Intelliinfotech has gained extensive expertise in music software and web application development. Our software engineers have acquired specific knowledge pertaining to the music industry, common issues, and users� needs, which now allows them to successfully deliver even most the most complex music functionality projects. </p>
                
                <div class="accordion mt-5" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5>We offer the following major music software solutions</h5>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1. Solutions for media player (web and desktop) functionalities.</p>
                                <p>2. Web music applications and plug-ins.</p>
                                <p>3. Complex web and desktop music solutions for entertainment.</p>
                                <p>4. Professional music editing applications, digital audio editors.</p>
                                <p>5. Audio recording applications.</p>
                                <p>6. Voice recognition software.</p>
                                <p>7. Media storage web portals.</p>
                                <p>8. Composing and notation software solutions.</p>
                                <p>9. Audio tools for complex projects.</p>

                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 text-center mt-5">
                @include('industries.industriesKnowMore.common_sidemenu')
            </div>
        </div>
    </div>
</section>



@include('common.banner')
@include('common.contactus')
@include('common.footer')
@endsection