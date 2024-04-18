@extends('main')
@section('content')

<div class="main_header_d d-none sticky-top">
    @include('common.header')
</div>




<section class="industries_health_sec industries_common_for_all p-0">
    <div class="conatiner-fluid sticky-top trans_header">
        @include('common.header')
    </div>
    <div class="container mt-5 pt-5">
        <div class="row all_main_rows">
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12  d-flex align-items-center">
                <div>

                    <h2>Healthcare Industry</h2>
                    <h4> Healthcare includes any field of operation that is associated with the improvement of human health.</h4>
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
            <h2>Software Development Services for the Healthcare Industry</h2>
                <p>Healthcare includes any field of operation that is associated with the improvement of human health. Some of the major fields within this industry are medical, hospital, and dental practice activities. Other fields include the work of physiotherapists, nurses, scientific or diagnostic laboratories, etc. the healthcare industry is also associated with health care services and equipment, pharmaceuticals, biotechnology, and life sciences. We at Intelliinfotech serve all of these healthcare industry fields except embedded programming of medical equipment.</p>
                
                <div class="accordion mt-5" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5>Electronic health or medical record (EHR or EMR)
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1. Is a systematic collection of electronic health information about individual patients or populations.</p>
                                <p>2. Can be shared across different health care settings by means of embedding in information system networks spanning entire companies.</p>
                                <p>3. Should include data about demographics, medical history, medication and allergies, immunization status, laboratory test results, radiology images, vital signs, personal stats such as age and weight, as well as billing information.</p>
                                <p>4. Reporting functionality.</p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5>Medical practice management software </h5>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1. Deals with the day-to-day operations of a medical practices (inpatient, outpatient, long-term care, rehabilitation providers).</p>
                                <p>2. Records patient demographics.</p>
                                <p>3. Appointment scheduling and functions for referral management.</p>
                                <p>4. Maintains lists of insurance providers.</p>
                                <p>5. Performs billing tasks.</p>
                                <p>6. Generation of reports.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5>Healthcare management (health system management) software</h5>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1. Billing.</p>
                                <p>2. Census.</p>
                                <p>3. Registration.</p>
                                <p>4. Appointment scheduling and referral management.</p>
                                <p>5. Contract management.</p>
                                <p>6. Document management.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h5>Educational medical software
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1.Courseware.</p>
                                <p>2.Educational web portal systems</p>
                                <p>3.Reference software.</p>
                                <p>4.Mobile educational software.</p>
                                 
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <h5>R&D, pharmacy, red and white biotechnology
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1. Scientific R&D applications for pharmacogenomics.</p>
                                <p>2. Genetic data analysis and genetic mapping.</p>
                                <p>3. Solutions for drug testing and analysis.</p>
                                <p>4. Modeling solutions for experiment simulations.</p>
                                <p>5. Molecular visualization software.</p>
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