<!-- <section class="ourindustries_sec">
    <div class="container">
        <h2>Our Industries</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit accusantium omnis laboriosam optio necessitatibus magnam. Nulla et suscipit enim corrupti, accusamus minima neque harum animi, beatae nemo cumque maiores at?</p>
        <div class="row">
            <div class="col-12">
                <div class="slider">
                    <div class="card our_industries_all_cards">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src="{{URL::asset('assets/images/industries/mobile_application.jpg')}}"
                                    class="all_images" width="100%" height="200px" alt="">
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <h5>Research & Development (R&D)</h5>
                                    <?php
                                    $short_des= "Technology for implementation, selection, and consulting, Generation of technical specifications,Software prototyping,Definition of further steps in the software development process";
                                    $short_des = mb_strimwidth($short_des, 0, 100, "....");
                                ?>
                                    <p> {{$short_des}} </p>
                                    <div class="text-end mb-3">
                                        <a href="{{URL::to('custom-software')}}" class="read_more_a">
                                            Read more >>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card our_industries_all_cards">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src="{{URL::asset('assets/images/industries/mobile_application.jpg')}}"
                                    class="all_images" width="100%" height="200px" alt="">
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <h5>Software architecture design</h5>
                                    <?php
                                        $short_des= "Analysis and definition of software elements, the relationships between them as well as their properties";
                                        $short_des = mb_strimwidth($short_des, 0, 100, "....");
                                    ?>
                                    <p>{{ $short_des}}</p>
                                    <div class="text-end mb-3">
                                        <a href="{{URL::to('custom-software')}}" class="read_more_a">
                                            Read more >>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card our_industries_all_cards">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src="{{URL::asset('assets/images/industries/mobile_application.jpg')}}"
                                    class="all_images" width="100%" height="200px" alt="">
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <h5>Software application development</h5>
                                    <?php
                                    $short_des= "Implementation of even the most complicated applications and systems with a
                                    full software development cycle from the initial analysis of requirements to
                                    delivery and further maintenance";
                                    $short_des = mb_strimwidth($short_des, 0, 100, "....");
                                ?>
                                    <p> {{$short_des}}</p>
                                    <div class="text-end mb-3">
                                        <a href="{{URL::to('custom-software')}}" class="read_more_a">
                                            Read more >>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card our_industries_all_cards">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src="{{URL::asset('assets/images/industries/mobile_application.jpg')}}"
                                    class="all_images" width="100%" height="200px" alt="">
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <h5>Dedicated teams of developers</h5>
                                    <?php
                                    $short_des= "Established and well-organized teams of dedicated full-time developers for
                                    long-term development projects";
                                    $short_des = mb_strimwidth($short_des, 0, 100, "....");
                                ?>
                                    <p> {{$short_des}}</p>

                                    <div class="text-end mb-3">
                                        <a href="{{URL::to('custom-software')}}" class="read_more_a">
                                            Read more >>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card our_industries_all_cards">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src="{{URL::asset('assets/images/industries/mobile_application.jpg')}}"
                                    class="all_images" width="100%" height="200px" alt="">
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <h5>Quality assurance</h5>
                                    <?php
                                    $short_des= "Manual and automated testing, Software performance and load testing as well as stability, usability, and security testing, internationalization and localization testing, and destructive
                                    testing, Unit testing, integration testing, system and system integration testing,
                                    regression testing, alpha and beta testing";
                                    $short_des = mb_strimwidth($short_des, 0, 100, "....");
                                ?>
                                    <p> {{$short_des}} </p>
                                    <div class="text-end mb-3">
                                        <a href="{{URL::to('custom-software')}}" class="read_more_a">
                                            Read more >>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card our_industries_all_cards">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src="{{URL::asset('assets/images/industries/mobile_application.jpg')}}"
                                    class="all_images" width="100%" height="200px" alt="">
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <h5>Software documentation creation</h5>
                                    <?php
                                    $short_des= "Documentation of software requirements � a description of what the particular
                                    software is intended to do with clearly defined deliverables, Architecture/design documentation � a description of software elements, the relationships between them as well as their properties, Technical documentation � code documents describing various aspects of its intended operation, User documentation � a description of each feature of the program as well as
                                    instructions on the use of these features";
                                    $short_des = mb_strimwidth($short_des, 0, 100, "....");
                                ?>
                                    <p> {{$short_des}} </p>
                                    
                                    <div class="text-end mb-3">
                                        <a href="{{URL::to('custom-software')}}" class="read_more_a">
                                            Read more >>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card our_industries_all_cards">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src="{{URL::asset('assets/images/industries/mobile_application.jpg')}}"
                                    class="all_images" width="100%" height="200px" alt="">
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <h5>Software migration or re-engineering</h5>
                                    <?php
                                    $short_des= "Moving software from one operating environment to a better one (for instance,
                                    from one platform to another), Modification of the software system to add new functionality or to correct
                                    errors";
                                    $short_des = mb_strimwidth($short_des, 0, 100, "....");
                                ?>
                                    <p> {{$short_des}} </p>
                                    <div class="text-end mb-3">
                                        <a href="{{URL::to('custom-software')}}" class="read_more_a">
                                            Read more >>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card our_industries_all_cards">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src="{{URL::asset('assets/images/industries/mobile_application.jpg')}}"
                                    class="all_images" width="100%" height="200px" alt="">
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <h5>Maintenance and support</h5>
                                    <?php
                                    $short_des= "Modification of a software product after delivery to correct faults or to
                                    improve performance and other attributes";
                                    $short_des = mb_strimwidth($short_des, 0, 100, "....");
                                ?>
                                    <p> {{$short_des}}</p>

                                    <div class="text-end mb-3">
                                        <a href="{{URL::to('custom-software')}}" class="read_more_a">
                                            Read more >>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-end mt-5 mb-4 p-0">
            <a href="{{URL::to('industries')}}">Know More <i class="fa-solid fa-arrow-right mx-2"></i></a>
        </div>
    </div>
</section> -->



<section class="ourindustries_sec">
    <div class="container">
        <h2>Our Industries</h2>
        <p>At Intelli, we are essentially cross-industry and specialize in providing innovative solutions that cut across all verticals. That said, we are proud of the successful projects we have helped lead and deploy in the following areas. The top 3 industries we work with, along with a 4-liner case study for each:</p>

        <div class="row">
            <div class="col-lg-4 mt-5">
                <div class="card retail_card">
                    <div class="row">
                        <div class="col-12 text-center p-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{URL::asset('assets/images/industries/retail_i.png')}}" class=""
                                            width="20%" alt="">
                                    </div>
                                    <div class="col-12">
                                        <h5 class="pt-3">Retail</h5>
                                        <p class="pt-2">Intelliinfotech is able to provide a wide range of retail solutions that help improve the efficiency of commercial activities, gain control of operations, and significantly boost revenue.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-5">
                <div class="card it_card">
                    <div class="row">
                        <div class="col-12 text-center p-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{URL::asset('assets/images/industries/innovation.png')}}" class=""
                                            width="20%" alt="">
                                    </div>
                                    <div class="col-12">
                                        <h5 class="pt-3">IT</h5>
                                        <p class="pt-2">The information technology industry is the study, design, development, implementation, support, and management of computer-based information systems, particularly software applications and computer hardware.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-5">
                <div class="card hospitality_card">
                    <div class="row">
                        <div class="col-12 text-center p-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{URL::asset('assets/images/industries/h_i.png')}}" class=""
                                            width="20%" alt="">
                                    </div>
                                    <div class="col-12">
                                        <h5 class="pt-3">Hospitality</h5>
                                        <p class="pt-2">The hospitality industry comprises a vast range of fields: lodging, restaurants, event planning, theme parks, cruise lines, and various fields in the tourism industry. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-5">
                <div class="card callcenters_card">
                    <div class="row">
                        <div class="col-12 text-center p-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{URL::asset('assets/images/industries/call_center.png')}}" class=""
                                            width="20%" alt="">
                                    </div>
                                    <div class="col-12">
                                        <h5 class="pt-3">Call Centers</h5>
                                        <p class="pt-2">Call centers, centralized offices for receiving and transmitting large volumes of requests by phone, are a growing and developing industry. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-5">
                <div class="card healthcare_card">
                    <div class="row">
                        <div class="col-12 text-center p-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{URL::asset('assets/images/industries/health_care.png')}}" class=""
                                            width="20%" alt="">
                                    </div>
                                    <div class="col-12">
                                        <h5 class="pt-3">Health Care</h5>
                                        <p class="pt-2">Healthcare includes any field of operation that is associated with the improvement of human health. Some of the major fields within this industry are medical, hospital, and dental practice activities.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-5">
                <div class="card education_card">
                    <div class="row">
                        <div class="col-12 text-center p-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{URL::asset('assets/images/industries/education.png')}}" class=""
                                            width="20%" alt="">
                                    </div>
                                    <div class="col-12">
                                        <h5 class="pt-3">Education</h5>
                                        <p class="pt-2">Educational software is software that is intended for use in teaching and self-learning environments.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4 mt-5">
                <div class="card music_card">
                    <div class="row">
                        <div class="col-12 text-center p-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{URL::asset('assets/images/industries/music.png')}}"
                                            class="" width="20%" alt="">
                                    </div>
                                    <div class="col-12">
                                        <h5 class="pt-3">Music</h5>
                                        <p class="pt-2">Point of sale software, Order and delivery management system</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="text-end mt-5 mb-4 p-0">
                <a href="{{URL::to('industries')}}">Know More <i class="fa-solid fa-arrow-right mx-2"></i></a>
            </div>
        </div>
    </div>
</section>