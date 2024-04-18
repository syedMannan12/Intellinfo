@extends('admin.main')
@section('content')

<section class="conract_us_sec p-0">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 my-auto">
                <h4 class="page-title m-0">CONTACT REQUESTS</h4>
            </div>
            <div class="col-lg-3 col-md-3 d-none">
                <a href="{{URL::to('/contact_us_csv_download')}}">
                    <button type="submit" class="dashbord_btn float-right mr-2 p-2" id="daily_calls_download_btn">
                        <i class="fa-solid fa-download"></i></button>
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
                @if(sizeof($contactrequestsView)>0)
                    <div class="body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered m-0">
                            <thead>
                                    <tr class="text-center  text-white" style="background: #798dc9;">
                                        <th>S.No</th>
                                        <th>First Name</th>
                                        <th>Second Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php $i=$page;?>
                                        @foreach($contactrequestsView as $contact) 
                                    <tr>
                                        <td class="text-center">{{$i}}</td>
                                        <td class="text-center">{{$contact->first_name}}</td> 
                                        <td class="text-center">{{$contact->second_name}}</td> 
                                        <td class="text-center">{{$contact->mobile_number}}</td>
                                        <td class="text-center">{{$contact->email}}</td> 
                                        <td class="text-center">{{$contact->message}}</td>  
                                    </tr>
                                    <?php $i++;?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {!! $contactrequestsView->links() !!} 
                @else
                <p class="text-center py-5" style="font-size:25px">No Data Available To Show</p>
                @endif
                
            </div>
        </div>
    </div>
</section>

@endsection