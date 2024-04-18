@extends('admin.main')
@section('content')

<section class=" p-0">
    <div class="row">
        <div class="col-9"> 
            <h4>JOB APPLIED USER DETAILS</h4>
        </div>
        <div class="col-3"> 
            <a href="{{URL:: to('/applied-jobs')}}">
            <button type="button" class="all_admin_btns float-right" id="">Back</button>
            </a>
        </div>
    </div>
    @foreach($jobsappliedview as $car)
    <div class="container-fluid ">
        <div class="card ">
            <div class="container">
            <form id="update_careers">
                <div class="row mt-4">
                    <!-- NEW CODE -->
                    
                    <div class="col-12 col-md-6 mb-0 pt-5">
                        <div class="input-group">  
                            <span>Job ID </span>
                            <input type="text" class="admin_input"  value="{{$car->job_id}}"  disabled/>
                        </div>
                    </div>	
                    <div class="col-12 col-md-6 mb-0 pt-5">
                        <div class="input-group">  
                            <span>Job Title </span>
                            <input type="text" class="admin_input"  value="{{$car->job_designation}}"  disabled/>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 mb-0 pt-5">
                        <div class="input-group">  
                            <span>First Name</span>
                            <input type="text" class="admin_input"  value="{{$car->first_name}}"  disabled/>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-0 pt-5">
                        <div class="input-group"> 
                            <span>Last Name </span> 
                            <input type="text" class="admin_input"  value="{{$car->last_name}}"  disabled/>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-0 pt-5">
                        <div class="input-group">  
                            <span>Email </span>
                            <input type="text" class="admin_input" value="{{$car->email}}"  disabled/>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-0 pt-5">
                        <div class="input-group">  
                            <span>Phone Number </span>
                            <input type="text" class="admin_input" value="{{$car->mobile_number}}" disabled/>
                        </div>
                    </div>

                    <!-- <div class="pt-5"> -->
                    <embed src="<?php echo env('website_url')?><?php echo $car->file_upload ?>" class="pt-5" type="application/pdf" width="100%" height="600px" />                        
                    <!-- </div> -->
                </div> 
            </form> 
            </div>
            
        </div>
    </div>
    @endforeach
</section>


@endsection