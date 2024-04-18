@extends('main')
@section('content')

<div class="main_header_d d-none sticky-top">
    @include('common.header')
</div>




<section class="industries_hospitality_sec industries_common_for_all p-0">
    <div class="conatiner-fluid sticky-top trans_header">
        @include('common.header')
    </div>
    <div class="container mt-5 pt-5">
        <div class="row all_main_rows">
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12  d-flex align-items-center">
                <div>

                    <h2>Hospitality industry</h2>
                    <h4>The hospitality industry comprises a vast range of fields: lodging, restaurants, event planning,
                    theme parks, cruise lines, and various fields in the tourism industry.</h4>
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
            <h2>Software development services for the Hospitality industry</h2>
                <p>The hospitality industry comprises a vast range of fields: lodging, restaurants, event planning,
                    theme parks, cruise lines, and various fields in the tourism industry. Intelliinfotech offers
                    software development services with a focus on lodging and restaurants.</p>
                
                <div class="accordion mt-5" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5 >Online reservation systems</h5>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p>booking engines integrated in your marketing website � as custom software solutions or as commercial off-the-shelf software products</p>
                            
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5 >Reservation management solutions</h5>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>accounting for online reservation systems and other sources.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5 >Furniture placement planners</h5>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>including calendar and scheduling options.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h5 >Customer Relationship Management systems (CRM)</h5>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>automation solutions for processes implemented by a company to manage communication with its customers.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <h5 >Event planning solutions</h5>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>integral solutions with options for guest list management and hall planning.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <h5 >Point of sales solutions</h5>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>touch screen ordering systems.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <h5 >Global distribution systems (GDS)</h5>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>with Open Travel Association (OTA) standard compliance.</p>
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