        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <div class="row">
                    <div class="col-12">
                        <figure class="mx-auto my-auto pl-3 pr-3 pt-4 pb-3">
                            <a class="" href="{{URL::to('/admin-login')}}"><img src="{{URL::asset('/assets/images/Cincyr Logo_Last.png')}}" class="mt-2" width="70%" alt=""></a>
                        </figure>
                    </div>
                </div>
                <ul class="list pt-5">
                    

                    



                    



                    @if( \Request::is('jobs') || \Request::is('applied-jobs') )
                    <li class="active">
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <span>Careers</span>
                        </a>
                        <ul class="ml-menu">
                            @if( \Request::is('jobs'))
                            <li>
                                <a href="{{URL:: to('/jobs')}}" class="active">Career Jobs</a>
                            </li>
                            @else
                            <li>
                                <a href="{{URL:: to('/jobs')}}">Career Jobs</a>
                            </li>
                            @endif

                            @if( \Request::is('applied-jobs'))
                            <li>
                                <a href="{{URL:: to('/applied-jobs')}}" class="active">Applied Jobs</a>
                            </li>
                            @else
                            <li>
                                <a href="{{URL:: to('/applied-jobs')}}">Applied Jobs</a>
                            </li>
                            @endif

                        </ul>
                    </li>
                    @else
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <span>Careers</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{URL:: to('/jobs')}}">Career Jobs</a>
                            </li>
                            <li>
                                <a href="{{URL:: to('/applied-jobs')}}">Applied Jobs</a>
                            </li>
                            

                        </ul>
                    </li>
                    @endif

                    


                    @if( \Request::is('contact-requests'))
                    <li class="active">
                        <a href="{{URL:: to('/contact-requests')}}">
                            <i data-feather="fas fa-address-book"></i>
                            <span>Contact Requests </span>
                        </a>
                    </li>

                    @else
                    <li>
                        <a href="{{URL:: to('/contact-requests')}}">
                            <!-- <i data-feather="fas fa-address-book"></i> -->
                            <span>Contact Requests</span>
                        </a>

                    </li>
                    @endif
                    <!-- <li>
                        <a href="#">
                            <i data-feather="calendar"></i>
                            <span>Who We Are</span>
                        </a>
                    </li> -->
                </ul>
            </div>
            <!-- #Menu -->
        </aside>