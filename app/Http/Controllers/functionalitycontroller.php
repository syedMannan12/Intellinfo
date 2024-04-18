<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\functionality;
use Redirect;
use DB;
use Response;
use Session;



class functionalitycontroller extends Controller
{
    //

    public function __construct(){
        $this->functionality = new functionality();
    }

    public function careers(Request $request){
        $data= $request->all();
            // print_r($data);
            // die;
        $get_jobs=$this->functionality->get_jobs($data);
        // print_r($data);
            // die;
        return view('careers.index')->with('get_jobs',$get_jobs);
    }


    public function get_jobs_details($id){
        $get_jobs_details = $this->functionality->get_jobs_details($id);
        return response()->json([
            'status'=>200,
            'get_jobs_details'=>$get_jobs_details,
        ]);
    }

    public function applyjobs(Request $request){
        $data = $request->all();
        // print_r($data);
        // die;
        $file    = $request->file('file_upload');
        $filename  = uniqid().$file->getClientOriginalName();
        $file_loc = $filename;
        $destinationPath = public_path('resumes/');
        $file->move($destinationPath, $filename);           
        $file_loc = 'resumes/'.$file_loc;

        $applyjobs = $this->functionality->applyjobs($data, $file_loc);
        return $applyjobs;
    }

    public function contact_us(Request $request){
       
        $data = $request->all();
    //    print_r($data);
    //    die;
        $contact_us = $this->functionality->contact_us($data);
        return $contact_us;
    }


    
}
