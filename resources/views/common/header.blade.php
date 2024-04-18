<section class="header_section sticky-top p-0">
    <nav class="navbar navbar-expand-lg nav_bar">
        <div class="container">
            <a class="navbar-brand" style="width:200px;" href="/">
                <img src="{{URL::asset('/assets/images/intMLogo.png')}}" class="home_header_image" width=100%; alt=""></a>
            <!-- <a class="navbar-brand" href="/"><img src="{{URL::asset('/assets/images/all/logo.png')}}" width=75%; alt=""></a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto me-2 header_links">
                    @if( \Request::is('/'))
                    <li class="nav-item"><a class="nav-link active" href="{{URL::to('/')}}"> Home</a></li>
                    @else
                    <li class="nav-item"><a class="nav-link in-active" href="/">Home</a></li>
                    @endif
                    <li class="nav-item company_drop_down">
                        <div id="Services" class="dropdown">
                            @if( \Request::is('company') || \Request::is('custom-software-development') || \Request::is('offshore-development') || \Request::is('clients') || \Request::is('work-approach') || \Request::is('software-development-for-data-center') || \Request::is('team-creation') || \Request::is('project-management') || \Request::is('client-management'))
                                <a class="nav-link active" href="{{URL::to('company')}}">Company</a>
                            @else
                                <a class="nav-link in-active" href="{{URL::to('company')}}">Company</a>
                            @endif
                            <div class="dropdown-content mt-0 d-none">
                                <div class="container-fluid text-white mt-5 mb-5">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-12 col-sm-12 left_panel">
                                            <div
                                                class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-10 offset-sm-1">
                                                <div class="row">
                                                    <div class="home_he_s">
                                                        @if( \Request::is('custom-software-development'))
                                                        <p><a href="{{URL::to('custom-software-development')}}"
                                                                class="sub_d_active_links"><i
                                                                    class="fa-solid fa-arrow-right"></i> Custom Software
                                                                Development</a></p>
                                                        @else
                                                        <p><a href="{{URL::to('custom-software-development')}}"><i
                                                                    class="fa-solid fa-arrow-right"></i> Custom Software
                                                                Development</a></p>
                                                        @endif
                                                    </div>

                                                    <div class="home_he_s">
                                                        @if( \Request::is('clients'))
                                                        <p><a href="{{URL::to('clients')}}"
                                                                class="sub_d_active_links"><i
                                                                    class="fa-solid fa-arrow-right"></i> Clients</a></p>
                                                        @else
                                                        <p><a href="{{URL::to('clients')}}"><i
                                                                    class="fa-solid fa-arrow-right"></i> Clients</a></p>
                                                        @endif
                                                    </div>
                                                    <div class=" drop_menu mb-2">
                                                        <div id="Services" class="dropdown_mm mb-1">
                                                            @if( \Request::is('offshore-development'))
                                                            <a class="nav-link company_drop sub_d_active_links"
                                                                href="{{URL::to('offshore-development')}}"><i
                                                                    class="fa-solid fa-arrow-right"></i> Offshore
                                                                Development Center</a>
                                                            @else
                                                            <a class="nav-link company_drop"
                                                                href="{{URL::to('offshore-development')}}"><i
                                                                    class="fa-solid fa-arrow-right"></i> Offshore
                                                                Development Center</a>
                                                            @endif
                                                            <div class="dropdown-content-mm mt-0">
                                                                @if(
                                                                \Request::is('software-development-for-data-center'))
                                                                <p class="mb-3 sub_drop_downs "><a
                                                                        href="{{URL::to('software-development-for-data-center')}}"
                                                                        class="d-flex align-items-center sub_d_active_links"><i
                                                                            class="fa-solid fa-circle all_circles px-2"></i>
                                                                        Software Development for data centers</a></p>
                                                                @else
                                                                <p class="mb-3 sub_drop_downs"><a
                                                                        href="{{URL::to('software-development-for-data-center')}}"
                                                                        class="d-flex align-items-center "><i
                                                                            class="fa-solid fa-circle all_circles px-2"></i>
                                                                        Software Development for data centers</a></p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=" drop_menu mt-3">
                                                        <div id="Services" class="dropdown_mm mb-1">
                                                            @if( \Request::is('work-approach'))
                                                            <a class="nav-link company_drop sub_d_active_links"
                                                                href="{{URL::to('work-approach')}}"><i
                                                                    class="fa-solid fa-arrow-right"></i> work
                                                                approach</a>
                                                            @else
                                                            <a class="nav-link company_drop"
                                                                href="{{URL::to('work-approach')}}"><i
                                                                    class="fa-solid fa-arrow-right"></i> work
                                                                approach</a>
                                                            @endif
                                                            <div class="dropdown-content-mm mt-0">

                                                                @if( \Request::is('team-creation'))
                                                                <p class="mb-3 sub_drop_downs"><a
                                                                        href="{{URL::to('team-creation')}}"
                                                                        class="d-flex align-items-center sub_d_active_links"><i
                                                                            class="fa-solid fa-circle all_circles px-2"></i>
                                                                        Team creation approach </a></p>
                                                                @else
                                                                <p class="mb-3 sub_drop_downs"><a
                                                                        href="{{URL::to('team-creation')}}"
                                                                        class="d-flex align-items-center"><i
                                                                            class="fa-solid fa-circle all_circles px-2"></i>
                                                                        Team creation approach </a></p>
                                                                @endif

                                                                @if( \Request::is('project-management'))
                                                                <p class="sub_drop_downs"><a
                                                                        href="{{URL::to('project-management')}}"
                                                                        class="d-flex align-items-center sub_d_active_links"><i
                                                                            class="fa-solid fa-circle all_circles px-2"></i>
                                                                        Project Management Approach</a></p>
                                                                @else
                                                                <p class="sub_drop_downs"><a
                                                                        href="{{URL::to('project-management')}}"
                                                                        class="d-flex align-items-center"><i
                                                                            class="fa-solid fa-circle all_circles px-2"></i>
                                                                        Project Management Approach</a></p>
                                                                @endif

                                                                @if( \Request::is('client-management'))
                                                                <p class="sub_drop_downs"><a
                                                                        href="{{URL::to('client-management')}}"
                                                                        class="d-flex align-items-center sub_d_active_links"><i
                                                                            class="fa-solid fa-circle all_circles px-2"></i>
                                                                        Client Management</a></p>
                                                                @else
                                                                <p class="sub_drop_downs"><a
                                                                        href="{{URL::to('client-management')}}"
                                                                        class="d-flex align-items-center"><i
                                                                            class="fa-solid fa-circle all_circles px-2"></i>
                                                                        Client Management</a></p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-5 col-md-12 col-sm-12 d-none d-lg-block p-0 d-flex align-items-center">
                                            <div>
                                                <img src="{{URL::asset('assets/images/joinus.png')}}" width="80%"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @if( \Request::is('services') || \Request::is('services-software-development') || \Request::is('services-web-solutions') || \Request::is('services-business-automation') || \Request::is('services-mobile-solutions'))
                    <li class="nav-item"><a class="nav-link active" href="{{URL::to('/services')}}">Services</a></li>
                    @else
                    <li class="nav-item"><a class="nav-link in-active" href="{{URL::to('/services')}}">Services</a>
                    </li>
                    @endif
                    <li class="nav-item company_drop_down">
                        <div id="Services" class="dropdown">
                            @if( \Request::is('industries') || \Request::is('industries-call-center') || \Request::is('industries-education') || \Request::is('industries-health-care') || \Request::is('industries-hospitality') || \Request::is('industries-it') || \Request::is('industries-music') || \Request::is('industries-retail'))
                            <a class="nav-link active" href="{{URL::to('industries')}}">Industries</a>
                            @else
                            <a class="nav-link in-active" href="{{URL::to('industries')}}">Industries</a>
                            @endif
                            <div class="dropdown-content mt-0">
                                <div class="container-fluid text-white mt-5 mb-5">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-12 col-sm-12 left_panel">
                                            <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                                                <div class="row">
                                                    <div class="">
                                                        
                                                    @if( \Request::is('industries-retail'))    
                                                        <p><a href="{{URL::to('industries-retail')}}" class="sub_d_active_links"><i class="fa-solid fa-arrow-right"></i> Retail</a></p>
                                                        @else
                                                        <p><a href="{{URL::to('industries-retail')}}"><i class="fa-solid fa-arrow-right"></i> Retail</a></p>
                                                        @endif
                                                    </div>

                                                    <div class="">
                                                    @if( \Request::is('industries-hospitality'))    
                                                    <p><a href="{{URL::to('industries-hospitality')}}" class="sub_d_active_links"><i class="fa-solid fa-arrow-right"></i> Hospitality Industry</a></p>
                                                    @else
                                                    <p><a href="{{URL::to('industries-hospitality')}}"><i class="fa-solid fa-arrow-right"></i> Hospitality Industry</a></p>
                                                    @endif
                                                    </div>
                                                    <div class="">
                                                    @if( \Request::is('industries-it'))    
                                                    <p><a href="{{URL::to('industries-it')}}" class="sub_d_active_links"><i
                                                                    class="fa-solid fa-arrow-right"></i> IT</a></p>
                                                        @else
                                                        <p><a href="{{URL::to('industries-it')}}"><i
                                                                    class="fa-solid fa-arrow-right"></i> IT</a></p>
                                                        @endif
                                                    </div>
                                                    <div class="">
                                                    @if( \Request::is('industries-call-center'))    
                                                    <p><a href="{{URL::to('industries-call-center')}}" class="sub_d_active_links"><i
                                                                    class="fa-solid fa-arrow-right"></i> Call
                                                                Centers</a></p>
                                                    @else
                                                    <p><a href="{{URL::to('industries-call-center')}}"><i
                                                                    class="fa-solid fa-arrow-right"></i> Call
                                                                Centers</a></p>
                                                    @endif
                                                    </div>
                                                    <div class="">
                                                    @if( \Request::is('industries-health-care'))    
                                                    <p><a href="{{URL::to('industries-health-care')}}" class="sub_d_active_links"><i
                                                                    class="fa-solid fa-arrow-right"></i> Health Care</a></p>
                                                        @else
                                                        <p><a href="{{URL::to('industries-health-care')}}"><i
                                                                    class="fa-solid fa-arrow-right"></i> Health Care</a></p>
                                                        @endif
                                                    </div>
                                                    <div class="">
                                                    @if( \Request::is('industries-education'))    
                                                    <p><a href="{{URL::to('industries-education')}}" class="sub_d_active_links"><i
                                                                    class="fa-solid fa-arrow-right"></i> Education</a></p>
                                                        @else
                                                        <p><a href="{{URL::to('industries-education')}}"><i
                                                                    class="fa-solid fa-arrow-right"></i> Education</a></p>
                                                        @endif
                                                    </div>
                                                    <div class="">
                                                    @if( \Request::is('industries-music'))    
                                                    <p><a href="{{URL::to('industries-music')}}" class="sub_d_active_links"><i
                                                                    class="fa-solid fa-arrow-right"></i> Music</a></p>
                                                        @else
                                                        <p><a href="{{URL::to('industries-music')}}"><i
                                                                    class="fa-solid fa-arrow-right"></i> Music</a></p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-lg-5 col-md-12 col-sm-12 d-none d-lg-block p-0 d-flex align-items-center">
                                            <div>
                                                <img src="{{URL::asset('assets/images/industries/industries.jpg')}}" width="80%"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @if( \Request::is('technologies'))
                    <li class="nav-item"><a class="nav-link active" href="{{URL::to('/technologies')}}">Technologies</a>
                    </li>
                    @else
                    <li class="nav-item"><a class="nav-link in-active" href="{{URL::to('/technologies')}}">Technologies</a></li>
                    @endif

                    @if( \Request::is('careers'))
                    <li class="nav-item"><a class="nav-link active" href="{{URL::to('/careers')}}">Careers</a>
                    </li>
                    @else
                    <li class="nav-item"><a class="nav-link in-active" href="{{URL::to('/careers')}}">Careers</a></li>
                    @endif

                    @if( \Request::is('about-us'))
                    <li class="nav-item"><a class="nav-link active" href="{{URL::to('/about-us')}}">About Us</a>
                    </li>
                    @else
                    <li class="nav-item"><a class="nav-link in-active" href="{{URL::to('/about-us')}}">About Us</a>
                    </li>
                    @endif

                    @if( \Request::is('contact-us'))
                    <li class="nav-item"><a class="nav-link active" href="{{URL::to('/contact-us')}}">Contact Us</a>
                    </li>
                    @else
                    <li class="nav-item"><a class="nav-link in-active" href="{{URL::to('/contact-us')}}">Contact Us</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</section>