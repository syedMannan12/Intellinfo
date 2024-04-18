<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;

class admin extends Model
{
    
    
public function validatelogin($data){
    $validate_login = DB::table('admin_login')
    ->where('user_name', '=',$data['user_name'])
    ->where('password', '=',$data['password'])
    ->get();
    
    if(sizeof($validate_login)>0){
        return $validate_login;
    }
    else{
        return [];
    }
}


public function contactrequests(){
    $contactrequestsView =DB::table('contact_us')->orderBy('id','desc');
    $contactrequestsView = $contactrequestsView->paginate(30);

    if($contactrequestsView){$contactrequestsView = $contactrequestsView->paginate(30);
        return ['contactrequests'=>$contactrequestsView];
    }
    else{
        return [];
    }
}


public function jobs(){
    $jobsView =DB::table('careers')->orderBy('id','desc');
    $jobsView = $jobsView->paginate(30);

    if($jobsView){
        return ['jobs'=>$jobsView];
    }
    else{
        return [];
    }
}


public function savejobs($data){
    $time = Carbon::now();


// Get the last order id
    $get_careers = DB::table('careers')->orderBy('id', 'desc')->get();
    $get_job_id = $get_careers[0]->job_id;

// Get last 3 digits of last order id
$lastIncreament = substr($get_job_id, -5);
// print_r($lastIncreament);
// die;
// Make a new order id with appending last increment + 1
$newOrderId = 'INT' . str_pad($lastIncreament + 1, 5, 0, STR_PAD_LEFT);
// print_r($newOrderId);
//         die;
    $dupcheck = DB::table('careers')
    ->Where(('job_id'), 'like', '%' . ($newOrderId) . '%')
    ->get();
    if(sizeof($dupcheck)>0){
        return 2;
    }else{
        $savejobs = DB::table('careers')->insert([
            'job_id'=>$newOrderId,
            'job_designation'=>$data['job_designation'],
            'experience'=>$data['experience'],
            'posted_on'=>$data['published_date'],
            'job_description'=>$data['job_description'],
            'location'=>$data['location'],
            'created_on'=>$time,

        ]);            
        if($savejobs){
            return 1;
        }
        else{
            return 0;
        }
    }
}

public function editjobs($id){
    $editjobs = DB::table('careers')
                ->where('id',$id)
                ->get();
    if(sizeof($editjobs)>0){
        return $editjobs;
    }
    else{
        return [];
    }
}

public function updatejobs($data){

    $id=$data['recordid'];
    $time = Carbon::now();

    $updatejobs = DB::table('careers')->where('id','=',$id)->update([
        // 'job_id'=>$data['job_id'],
        'job_designation'=>$data['job_designation'],
        'experience'=>$data['experience'],
        'job_description'=>$data['job_description'],
        'location'=>$data['location'],
        'updated_on'=>$time,
        
    ]);
    
    if($updatejobs){
        return 1;
    }
    else{
        return 0;
    }


}


public function jobsapplied(){
    $jobsapplied = DB::table('applied_jobs')
    ->join('careers','careers.job_id','=','applied_jobs.job_id')
    ->select('applied_jobs.id','applied_jobs.job_id','applied_jobs.first_name','applied_jobs.last_name','applied_jobs.mobile_number','applied_jobs.file_upload','careers.job_designation')
    ->orderBy('applied_jobs.id','DESC');

    $jobsapplied = $jobsapplied->paginate(30);
    
    if(sizeof($jobsapplied)>0){
        return $jobsapplied;
    }
    else{
        return [];
    }
}



public function jobsappliedview($id){
    $jobsappliedview = DB::table('applied_jobs')
    ->join('careers','careers.job_id','=','applied_jobs.job_id')
    ->select('applied_jobs.id','applied_jobs.job_id','applied_jobs.first_name','applied_jobs.last_name','applied_jobs.mobile_number','applied_jobs.email','applied_jobs.file_upload','careers.job_designation')
    ->orderBy('applied_jobs.id','DESC')
                ->where('applied_jobs.id',$id);
                $jobsappliedview = $jobsappliedview->get();
    if(sizeof($jobsappliedview)>0){
        return $jobsappliedview;
    }
    else{
        return [];
    }
}




}
