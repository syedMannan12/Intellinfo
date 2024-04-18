@extends('admin.main')
@section('content')

<section class="speciality-list p-0">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 my-auto">
                <h4 class="page-title m-0">Applied Job Requests</h4>
            </div>
            
        </div>
    </div>
    <div class="row clearfix mt-3">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-success text-center success-msg d-none"></p>
                    <p class="text-danger text-center error-msg d-none"></p>
                </div>
            </div>
            <div class="card">
                @if(sizeof($jobsapplied)>0)
                    <div class="body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered m-0">
                                <thead>
                                    <tr class="text-center  text-white" style="background: #798dc9;">
                                        <th>S.No</th>
                                        <th>JOB ID</th>
                                        <th>Job Title</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php $i=$page;?>
                                        @foreach($jobsapplied as $jobs) 
                                    <tr>
                                        <td class="text-center">{{$i}}</td>
                                        <td class="text-center">{{$jobs->job_id}}</td> 
                                        <td class="text-center">{{$jobs->job_designation}}</td> 
                                        <td class="text-center">{{$jobs->first_name}}</td>  
                                        <td class="text-center">{{$jobs->last_name}}</td> 
                                        <td class="text-center">{{$jobs->mobile_number}}</td> 
                                        <td class="text-center">
                                            <a class="text-dark" href="{{URL::to('jobs-applied-view/'.$jobs->id)}}"> <i class="material-icons">visibility</i></a>
                                        </td>
                                    </tr>
                                    <?php $i++;?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                <p class="text-center py-5" style="font-size:25px">No Data Available To Show</p>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection