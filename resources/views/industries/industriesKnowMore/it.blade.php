@extends('main')
@section('content')

<div class="main_header_d d-none sticky-top">
    @include('common.header')
</div>




<section class="industries_it_sec industries_common_for_all p-0">
    <div class="conatiner-fluid sticky-top trans_header">
        @include('common.header')
    </div>
    <div class="container mt-5 pt-5">
        <div class="row all_main_rows">
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12  d-flex align-items-center">
                <div>

                    <h2>IT industry</h2>
                    <h4>The information technology industry is the study, design, development, implementation, support, and
                    management.</h4>
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
            <h2>Services for the IT industry</h2>
                <p>The information technology industry is the study, design, development, implementation, support, and
                    management of computer-based information systems, particularly software applications and computer
                    hardware (Information Technology Association of America (ITAA)). Intelliinfotech has been delivering
                    software development services to the IT industry, particularly to the software industry, for eight
                    years now.</p>
                
                <div class="accordion mt-5" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5>Research & Development (R&D)
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1. Technology for implementation, selection, and consulting.</p>
                                <p>2. Generation of technical specifications.</p>
                                <p>3. Software prototyping.</p>
                                <p>4. Definition of further steps in the software development process</p>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5>Software architecture design
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Analysis and definition of software elements, the relationships between them as well
                                    as their properties.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5>Software application development</h5>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Implementation of even the most complicated applications and systems with a full
                                    software development cycle from the initial analysis of requirements to delivery and
                                    further maintenance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h5>Dedicated teams of developers
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Established and well-organized teams of dedicated full-time developers for long-term
                                    development projects.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <h5>Quality assurance
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1. Manual and automated testing.</p>
                                <p>2. Software performance and load testing as well as stability, usability, and security
                                    testing, internationalization and localization testing, and destructive testing.</p>
                                <p>3. Unit testing, integration testing, system and system integration testing, regression
                                    testing, alpha and beta testing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <h5>Software documentation creation</h5>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1. Documentation of software requirements � a description of what the particular
                                    software is intended to do with clearly defined deliverables.</p>
                                <p>2. Architecture/design documentation � a description of software elements, the
                                    relationships between them as well as their properties.</p>
                                <p>3. Technical documentation � code documents describing various aspects of its intended
                                    operation.</p>
                                <p>4. User documentation � a description of each feature of the program as well as
                                    instructions on the use of these features.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <h5>Software migration or re-engineering
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1. Moving software from one operating environment to a better one (for instance, from
                                    one platform to another).</p>
                                <p>2. Modification of the software system to add new functionality or to correct errors</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <h5>Maintenance and support
                                </h5>
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Modification of a software product after delivery to correct faults or to improve
                                    performance and other attributes.</p>
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