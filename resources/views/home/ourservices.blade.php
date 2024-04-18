<section class="ourservices_sec">
    <div class="container">
        <h2>Our Services</h2>
        <p>Intelli Infotech offers a wide range of services in technology consulting, design advisory, and strategic
            consultation. Some of our key services include:</p>
        <div class="row">
            <div class="col-12">
                <div class="slider">
                    <div class="card our_services_all_cards">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src="{{URL::asset('assets/images/home/business.jpg')}}" class="all_images"
                                    width="100%" height="200px" alt="">
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <h5>Business automation software solutions</h5>
                                    <?php
                                        $short_des= "Complex custom business solutions with a deep analysis of the company";
                                        $short_des = mb_strimwidth($short_des, 0, 100, "....");
                                    ?>
                                    <p>{{ $short_des}}</p>
                                    <div class="text-end mb-3">
                                        <a href="{{URL::to('services-business-automation')}}" class="read_more_a">
                                            Read more >>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card our_services_all_cards">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src="{{URL::asset('assets/images/home/webSolutions.jpg')}}" class="all_images"
                                    width="100%" height="200px" alt="">
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <h5>Web solutions</h5>
                                    <?php
                                    $short_des= "Educational systems, Informational portals";
                                    $short_des = mb_strimwidth($short_des, 0, 100, "....");
                                ?>
                                    <p> {{$short_des}}</p>
                                    <div class="text-end mb-3">
                                        <a href="{{URL::to('services-web-solutions')}}" class="read_more_a">
                                            Read more >>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card our_services_all_cards">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src="{{URL::asset('assets/images/home/mobileSolutons.jpg')}}" class="all_images"
                                    width="100%" height="200px" alt="">
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <h5>Mobile solutions</h5>
                                    <?php
                                    $short_des= "Mobile business solutions, Mobile web solutions";
                                    $short_des = mb_strimwidth($short_des, 0, 100, "....");
                                ?>
                                    <p> {{$short_des}}</p>

                                    <div class="text-end mb-3">
                                        <a href="{{URL::to('services-mobile-solutions')}}" class="read_more_a">
                                            Read more >>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="card our_services_all_cards">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src="{{URL::asset('assets/images/services/network.jpg')}}" class="all_images"
                                    width="100%" height="200px" alt="">
                            </div>
                        </div>
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>Network </h5>
                                    <?php
                                $short_des= "Network services include network design, installation, configuration, and maintenance. This includes services such as firewall management, network security, and wireless network design.
                                ";
                                $short_des = mb_strimwidth($short_des, 0, 100, "....");
                            ?>
                                    <p> {{$short_des}} </p>
                                    <div class="text-end mb-3">
                                        <a href="{{URL::to('network')}}" class="read_more_a">
                                            Read more >>
                                        </a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card our_services_all_cards">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <img src="{{URL::asset('assets/images/services/cloud.jpg')}}"
                                class="all_images" width="100%" height="200px" alt="">
                        </div>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Cloud Computing</h5>
                                <?php
                                $short_des= "Cloud computing services provide businesses with access to computing resources such as servers, storage, and applications through the internet. Cloud computing services include Infrastructure as a Service (IaaS), Platform as a Service (PaaS), and Software as a Service (SaaS).
                                ";
                                $short_des = mb_strimwidth($short_des, 0, 100, "....");
                            ?>
                                <p> {{$short_des}} </p>
                                <div class="text-end mb-3">
                                    <a href="{{URL::to('cloud-computing')}}" class="read_more_a">
                                        Read more >>
                                    </a>
                                </div>


                            </div>
                        </div>

                    </div>
                    </div>



                    <div class="card our_services_all_cards">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <img src="{{URL::asset('assets/images/services/itCon.jpg')}}"
                                class="all_images" width="100%" height="200px" alt="">
                        </div>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>IT Consulting</h5>
                                <?php
                                $short_des= " IT consulting services provide businesses with advice and guidance on technology-related matters. This includes services such as IT strategy development, project management, and technology assessments.
                                ";
                                $short_des = mb_strimwidth($short_des, 0, 100, "....");
                            ?>
                                <p> {{$short_des}} </p>
                                <div class="text-end mb-3">
                                    <a href="{{URL::to('it-consulting')}}" class="read_more_a">
                                        Read more >>
                                    </a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>



                <div class="card our_services_all_cards">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <img src="{{URL::asset('assets/images/services/cyber.jpg')}}"
                                class="all_images" width="100%" height="200px" alt="">
                        </div>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Cyber Security</h5>
                                <?php
                                $short_des= "Cybersecurity services include services such as vulnerability assessments, penetration testing, and security audits to protect against cyber threats such as hacking, malware, and data breaches.
                                ";
                                $short_des = mb_strimwidth($short_des, 0, 100, "....");
                            ?>
                                <p> {{$short_des}} </p>
                                <div class="text-end mb-3">
                                    <a href="{{URL::to('cyber-security')}}" class="read_more_a">
                                        Read more >>
                                    </a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>


                <div class="card our_services_all_cards">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <img src="{{URL::asset('assets/images/services/callCen.jpg')}}"
                                class="all_images" width="100%" height="200px" alt="">
                        </div>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Help Desk</h5>
                                <?php
                                $short_des= "Help desk services provide technical support to users who need assistance with hardware or software issues. This includes services such as troubleshooting, software installations, and remote support.

                                ";
                                $short_des = mb_strimwidth($short_des, 0, 100, "....");
                            ?>
                                <p> {{$short_des}} </p>
                                <div class="text-end mb-3">
                                    <a href="{{URL::to('help-desk')}}" class="read_more_a">
                                        Read more >>
                                    </a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>




                <div class="card our_services_all_cards">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <img src="{{URL::asset('assets/images/services/backUp.jpg')}}"
                                class="all_images" width="100%" height="200px" alt="">
                        </div>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Data Backup and Recovery</h5>
                                <?php
                                $short_des= "Data backup and recovery services provide businesses with a plan to recover data in the event of data loss due to hardware failure, natural disasters, or cyber attacks.
                                ";
                                $short_des = mb_strimwidth($short_des, 0, 100, "....");
                            ?>
                                <p> {{$short_des}} </p>
                                <div class="text-end mb-3">
                                    <a href="{{URL::to('data-backup-recovery')}}" class="read_more_a">
                                        Read more >>
                                    </a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>




                <div class="card our_services_all_cards">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <img src="{{URL::asset('assets/images/services/appDev.jpg')}}"
                                class="all_images" width="100%" height="200px" alt="">
                        </div>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Application Development and Maintenance</h5>
                                <?php
                                $short_des= "Application development and maintenance services include designing, developing, testing, and maintaining software applications to meet business needs.";
                                $short_des = mb_strimwidth($short_des, 0, 100, "....");
                            ?>
                                <p> {{$short_des}} </p>
                                <div class="text-end mb-3">
                                    <a href="{{URL::to('application-development-maintenance')}}" class="read_more_a">
                                        Read more >>
                                    </a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>




                <div class="card our_services_all_cards">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <img src="{{URL::asset('assets/images/services/AI.jpg')}}"
                                class="all_images" width="100%" height="200px" alt="">
                        </div>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Artificial Intelligence (AI)</h5>
                                <?php
                                $short_des= "AI involves the development of computer systems that can perform tasks that typically require human intelligence, such as natural language processing, image recognition, and decision making.
                                ";
                                $short_des = mb_strimwidth($short_des, 0, 100, "....");
                            ?>
                                <p> {{$short_des}} </p>
                                <div class="text-end mb-3">
                                    <a href="{{URL::to('artifical-intelligence')}}" class="read_more_a">
                                        Read more >>
                                    </a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>



                <div class="card our_services_all_cards">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <img src="{{URL::asset('assets/images/services/ML.jpg')}}"
                                class="all_images" width="100%" height="200px" alt="">
                        </div>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Machine Learning (ML)</h5>
                                <?php
                                $short_des= "ML is a subset of AI that involves the use of algorithms and statistical models to enable computer systems to improve performance on a specific task through experience.
                                ";
                                $short_des = mb_strimwidth($short_des, 0, 100, "....");
                            ?>
                                <p> {{$short_des}} </p>
                                <div class="text-end mb-3">
                                    <a href="{{URL::to('machine-learning')}}" class="read_more_a">
                                        Read more >>
                                    </a>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>





                <div class="card our_services_all_cards">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <img src="{{URL::asset('assets/images/services/iot.jpg')}}"
                                class="all_images" width="100%" height="200px" alt="">
                        </div>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Internet of Things (IoT)</h5>
                                <?php
                                $short_des= "IoT refers to the network of physical devices, vehicles, buildings, and other objects that are embedded with sensors, software, and connectivity to enable the collection and exchange of data.
                                ";
                                $short_des = mb_strimwidth($short_des, 0, 100, "....");
                            ?>
                                <p> {{$short_des}} </p>
                                <div class="text-end mb-3">
                                    <a href="{{URL::to('services-mobile-solutions')}}" class="read_more_a">
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
        <div class="text-end mt-4 mb-4 p-0">
            <a href="{{URL::to('services')}}">Know More <i class="fa-solid fa-arrow-right mx-2"></i></a>
        </div>

    </div>
</section>