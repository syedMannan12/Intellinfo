@extends('admin.main')
@section('content')

<section class="speciality-list p-0">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 my-auto">
                <h4 class="page-title m-0">CAREER JOBS</h4>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <a href="{{URL:: to('/add-jobs')}}">
                    <button type="button" class="all_admin_btns float-right" id="">Add New</button>
                </a>
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
                @if(sizeof($jobsView)>0)
                    <div class="body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered m-0">
                                <thead>
                                    <tr class="text-center  text-white" style="background: #798dc9;">
                                        <th>S.No</th>
                                        <th>JOB ID</th>
                                        <th>USER DESIGNATION</th>
                                        <th>EXPERIENCE</th>
                                        <th>POSTED ON</th>
                                        <th>LOCATION</th>
                                        <th>JOB DESCRIPTION</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php $i=$page;?>
                                        @foreach($jobsView as $jobs) 
                                    <tr>
                                        <td class="text-center">{{$i}}</td>
                                        <td class="text-center">{{$jobs->job_id}}</td> 
                                        <td class="text-center">{{$jobs->job_designation}}</td>  
                                        <td class="text-center">{{$jobs->experience}}</td>  
                                        <td class="text-center">{{$jobs->posted_on}}</td>  
                                        <td class="text-center">{{$jobs->location}}</td>  
                                        <td class="text-center">{{$jobs->job_description}}</td>  
                                        <td class="text-center">
                                            <a class="text-dark" href="{{URL::to('edit-jobs/'.$jobs->id)}}"> <i class="material-icons">mode_edit</i></a>
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