<section class="admin_header p-0 " >
<nav class="navbar">
    <div class="container-fluid dddddd">
        <div class="navbar-header" >
        
            <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="#" onClick="return false;" class="bars"></a>
            
            <a class="navbar-brand" href="index.html" style="display:none;">
                <img src="assets/images/logo.png" alt="" />
                <span class="logo-name">Blize</span>
                
            </a>
            
        </div>
        
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul>
                <li>
                    <div class="col-md-12 d-block d-lg-none open_sidemenu_header d-none" id="open_sidemenu_header">
                        <i class="material-icons open_sidemenu d-none" style="color:black;">reorder</i>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                <div class="col-md-12 d-block d-lg-none close_sidemenu_header" id="close_sidemenu_header">
                        <i class="material-icons close_sidemenu " style="color:black;">reorder</i>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="#" onClick="return false;" class="sidemenu-collapse">
                        <i data-feather="align-justify"></i>
                    </a>
                </li>
                <li class="d-none">
                    <span class="searchicon">
                        <!-- <img src="{{URL::asset('assets\images\Group 12.svg')}}" alt=""> -->
                        <i class="fa fa-search " aria-hidden="true"></i>
                    </span>
                    <input  type="search" placeholder="search for..." class="headersearch postion-relative " >
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Full Screen Button -->
                <li class="fullscreen">
                    <a href="javascript:;" class="fullscreen-btn">
                        <i data-feather="maximize"></i>
                    </a>
                </li>
                
                <!-- #END# Full Screen Button -->
                <li class="dropdown user_profile">
                   
                        <div class="chip dropdown-toggle" data-toggle="dropdown">
                        <!-- <img src="{{URL::asset('assets\images\group 6.svg')}}" /> -->
                        <i class="fa-solid fa-user text-dark pr-2" style="font-size: 15px;"></i>
                            <!-- <i class="fas fa-user pr-3 "></i> -->
                           Hello,{{ Session::get('user_name') }}
                        </div>
                   
                    <ul class="dropdown-menu pullDown">
                        <li class="body">
                            <ul class="user_dw_menu">
                                <li>
                                    <a href="#" onClick="return false;">
                                    <!-- <img src="{{URL::asset('assets\images\Group 12.svg')}}" /> -->
                                    <i class="fa-solid fa-user text-dark"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onClick="return false;">
                                        <i class="fa-solid fa-right-from-bracket " id="logout"></i>Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="logout_prk_admin">
                    <!-- <button type="btn " class="logoutbtn">  <img src="{{URL::asset('assets\images\logout_black_24dp.svg')}}" /></button> -->
                    <!-- <a href="logout" >
                        <img src="{{URL::asset('assets\images\logout_black_24dp.svg')}}" class="logout" />
                    </a> -->
                    <i class="fa-solid fa-right-from-bracket text-dark p-3 mt-1 logout_btn" id="logout" class="logout " data-toggle="modal" data-target="#exampleModalCenter"></i>
                    <!-- <img src="{{URL::asset('assets\images\logout_black_24dp.svg')}}" class="logout " data-toggle="modal" data-target="#exampleModalCenter"/> -->
                </li>
            </ul>
        </div>
    </div>
</nav>
</section>
