@extends('admin.main')
@section('content')

<section class="p-0">
    <div class="row">
        <div class="col-9">
            <h4>Edit Jobs</h4>
        </div>
        <div class="col-3">
            <a href="{{URL:: to('/jobs')}}">
                <button type="button" class="all_admin_btns float-right" id="">Back</button>
            </a>
        </div>
    </div>
    @foreach($editjobs as $jobs)
    <div class="container-fluid ">
        <div class="card ">
            <div class="container">
                <form id="update_jobs">
                    <div class="row mt-4">
                        <!-- <div class="col-lg-6 col-md-6 col-sm-12 ">
                            <div class="input-group mt-3">
                                <span>Job ID</span>
                                <input type="text" placeholder="Job ID" class="admin_input job_id" id="job_id"
                                    name="job_id" value=" {{$jobs->job_id}} " autocomplete="off">
                                <div id="job_id_error_div"></div>
                            </div>
                        </div> -->
                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                            <div class="input-group mt-3">
                                <span>Job Desgination</span>
                                <input type="text" placeholder="Job Desgination" class="admin_input job_designation"
                                    id="job_designation" name="job_designation" value=" {{$jobs->job_designation}} "
                                    autocomplete="off">
                                <div id="job_designation_error_div"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                            <div class="input-group mt-3">
                                <span>Experience</span>
                                <input type="text" placeholder="Experience" class="admin_input experience" id="experience"
                                    name="experience" value=" {{$jobs->experience}} " autocomplete="off">
                                    <div id="experience_error_div"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="input-group mt-3">
                                <span>Location</span>
                                <!-- <input type="text" placeholder="Location" value=" {{$jobs->location}} "  class="admin_input location" id="location"
                                    name="location" autocomplete="off"> -->
                                    <textarea placeholder="Write Something.." name="location"  class="location" id="location" rows="3" class="">{{$jobs->location}}</textarea>                            
                                    <div id="slug_error_div"></div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-12 mb-0">
                            <span class="pb-2">Job Description</span>
                            <textarea placeholder="Write Something.." name="job_description" value="  " class="job_description" id="job_description" rows="3" class="">{{$jobs->job_description}}</textarea>                            <div id="job_description_image_error_div"></div>
                        </div>
                        
                        
                       
                        <input type="hidden" name="recordid" class="recordid" value="{{$jobs->id}}">
                        <div class="col-12 col-md-12 mb-0">
                            <p class="text-danger mb-0">* All fields are Mandatory</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-0 text-center">
                            <div class="form-group">
                                <div class="form-line">
                                    <div class="error_msg col-red w-100" style="display:none"></div>
                                    <div class="success_msg col-green w-100" style="display:none"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center mb-5">
                            <button type="submit" class="all_admin_btns update_blog_btn" id="update_blog_btn">SUBMIT</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
    @endforeach
</section>


@endsection