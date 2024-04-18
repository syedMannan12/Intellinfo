<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;
use Carbon\Carbon;

class functionality extends Model
{
    //
    public function get_jobs(){
        $get_jobs =DB::table('careers')->orderBy('id','desc')->get();
        if(sizeof($get_jobs)>0){
            return $get_jobs;
        }else{
            return [];
        }
        // $get_jobs = $get_jobs->paginate(30);
        // print_r($get_jobs);
        // die;
        // if($get_jobs){
        //     return ['get_jobs'=>$get_jobs];
        // }
        // else{
        //     return [];
        // }
    }


    public function get_jobs_details($id){
        $get_jobs_details = DB::table('careers')
                    ->where('id',$id)
                    ->get();
        if(sizeof($get_jobs_details)>0){
            return $get_jobs_details;
        }
        else{
            return [];
        }
    }
    public function applyjobs($data,$file_loc){
        $time = Carbon::now();
        $applyjobs = DB::table('applied_jobs')->insert([
            'first_name'=>$data['first_name'],
            'last_name'=>$data['last_name'],
            'job_id'=>$data['app_job_id'],
            'email'=>$data['email'],
            'file_upload'=>$file_loc,
            'mobile_number'=>$data['mobile_number'],
            'created_on'=>$time,
        ]);            
        if($applyjobs){
            return 1;
        }
        else{
            return 0;
        }
    }


    public function contact_us($data){ 
        // print_r($data);
        // die;
        $time = Carbon::now();
        $contact_us = DB::table('contact_us')->insert([
            'first_name'=>$data['first_name'],
            'second_name'=>$data['second_name'],
            'mobile_number'=>$data['mobile_number'],
            'email'=>$data['email'],
            'message'=>$data['message'],
            'created_on'=>$time
        ]);
        if($contact_us){
            return 1;
        }
        else{
            return 0;
        }
    }
}
