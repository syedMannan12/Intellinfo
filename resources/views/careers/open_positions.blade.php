<section class="open_positions_sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Open Positions</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure distinctio, aut minima voluptate deserunt soluta ad corrupti tempore aperiam sunt eaque facilis velit quidem iste quos. Consequatur voluptas officia reprehenderit?</p>
                <div class="row mt-5">

                    @if(sizeof($get_jobs)>0)
                    @foreach($get_jobs as $get_job)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mt-5">
                        <div class="card openings_cards ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 pt-3 pb-3">
                                        <h5>{{$get_job->job_designation}}</h5>
                                        <hr>
                                        <p>JobId: {{$get_job->job_id}}</p>
                                        <p>Experience: {{$get_job->experience}}Years</p>
                                        <p>Location: {{$get_job->location}}</p>
                                        <?php
                                            $orgDate = $get_job->posted_on;  
                                            $newDate = date("d M Y", strtotime($orgDate)); 
                                        ?>
                                        <p>Posted: {{$newDate}}</p>
                                        <div class="text-center">
                                            <button
                                                class="all_btns sign_in_btn openpositions_buttons show_job_openings_model how_model"
                                                value="{{$get_job->id}}">Apply Now</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="text-center py-5" style="font-size:25px">No Current Job Openings</p>
                    @endif



                </div>
            </div>
        </div>
    </div>
</section>



<div class="modal " id="apply_job_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="container ">
                <div class="row mt-3">
                    <div class="col-lg-12 col-md-12 col-12 text-center">
                        <!-- <img src="{{URL::asset('/assets/images/Cincyr Logo_Last.png')}}" style="width:50% !important;" class="pb-3" alt=""> -->
                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="col-12 text-center p-5">
                        <img src="{{URL::asset('/assets/images/intMLogo .png')}}" class="home_header_image " width=20%;
                            alt="">
                        <h5 class="login_title  mt-3">Apply Job Here !!!!</h5>
                    </div>


                    <!-- <h5 class="login_title text-center">You can apply job here</h5> -->
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                        <form id="apply_now_form">
                            <div class="row">
                                <div class="col-4">
                                    <span class="display_titles">
                                        <h5 class="display_titles" id="job_designation"></h5>
                                    </span>
                                </div>
                                <div class="col-4">
                                    <span class="display_titles">Posted On: <p class="display_titles" id="posted_on">
                                        </p></span>
                                </div>
                                <div class="col-4">
                                    <span class="display_titles">Experience: <p class="display_titles" id="experience">
                                        </p> Years</span>
                                </div>
                                <div class="col-4 mt-3">
                                    <span class="display_titles">Job ID: <p class="display_titles" id="job_id"></p>
                                    </span>
                                </div>
                                <div class="col-12 mt-3">
                                    <span class="display_titles">Location: <p class="display_titles" id="location"></p>
                                    </span>
                                </div>
                                <div class="col-12 mt-3">
                                    <span class="display_titles">Job Description: <p class="display_titles"
                                            id="job_description"></p></span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-3 ">
                                    <div class="input-group mt-3">
                                        <span>First Name</span>
                                        <input type="text" placeholder="First Name" class="first_name" id="first_name"
                                            name="first_name" autocomplete="off">
                                        <div id="first_name_error_div"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-3 ">
                                    <div class="input-group mt-3">
                                        <span>Last Name</span>
                                        <input type="text" placeholder="Last Name" class="last_name" id="last_name"
                                            name="last_name" autocomplete="off">
                                        <div id="last_name_error_div"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-3 ">
                                    <div class="input-group mt-3">
                                        <span>Email Address</span>
                                        <input type="text" placeholder="Email Address" class="email" id="email"
                                            name="email" autocomplete="off">
                                        <div id="email_error_div"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-3 ">
                                    <div class="input-group mt-3">
                                        <span>Mobile Number</span>
                                        <input type="text" placeholder="Mobile Number" class="mobile_number"
                                            id="mobile_number" name="mobile_number" autocomplete="off">
                                        <div id="mobile_number_error_div"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                                    <div class="row">
                                        <div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-10 offset-md-1">
                                            <label class="label_res">
                                                <input type="file" name="file_upload" id="file_upload"
                                                    class="file_upload" required="">
                                                <span class="resume_text"><i
                                                        class="fa-solid fa-paperclip"></i>&nbsp;&nbsp;Resume</span>
                                                <i class="fa-solid fa-check tick_mark d-none"></i>
                                            </label>
                                            <div id="file_upload_error_div"></div>
                                        </div>
                                    </div>

                                </div>
                                <input type="hidden" class="app_job_id" name="app_job_id" id="app_job_id">


                                <div class="col-lg-12 ">
                                    <div class="form-outline mb-4  pt-2">
                                        <div class="error_msg text-center" style="display:none;color:red;"></div>
                                        <div class="success_msg text-center " style="display:none;color:green;"></div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="all_btns submit_btn">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>