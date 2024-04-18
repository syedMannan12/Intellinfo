<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Redirect;
use DB;
use Response;
use Session;

class admincontroller extends Controller
{
    //

    public function __construct(){
        $this->admin = new admin();
    }

    public function admin_login(){
        return view('admin.login');
    }


    public function validate_admin_log_in(Request $request){
        $data = $request->all();
            // print_r($data);
            // die;
        $validate_login=$this->admin->validatelogin($data);
        if(sizeof($validate_login)>0){
            Session::put('admin_id', $validate_login[0]->id);
            Session::put('user_name', $validate_login[0]->user_name);
            Session::put('password', $validate_login[0]->password);
            Session::put('role', $validate_login[0]->role);
            return 2;

            
        }
        else{
            return 3;
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
         return redirect('/admin-login');
    }


    
    public function dashboard(){
        if (!session('user_name')) {
	    	return redirect('/admin-login');
        }
        return view('admin.dashboard');
    }


    public function contactrequests(){
        if (!session('user_name')) {
	    	return redirect('/admin-login');
        }
        if (isset($_GET['page'])) {
            $pagenumber = $_GET['page'];
            $page = ($pagenumber - 1) * 30 + 1;
        } else {
            $page = 1;
        }

        $contactrequests=$this->admin->contactrequests();
        if(sizeof($contactrequests)>0){
            $contactrequestsView=$contactrequests['contactrequests'];
            Session::put('contactrequests',$contactrequestsView);
        }
        else{
            $contactrequestsView=[];
        }
        return view('admin.contactus')->with('contactrequests',$contactrequests)->with('contactrequestsView',$contactrequestsView)->with('page',$page);
    }



    public function jobs(){
        if (!session('user_name')) {
	    	return redirect('/admin-login');
        }
        if (isset($_GET['page'])) {
            $pagenumber = $_GET['page'];
            $page = ($pagenumber - 1) * 30 + 1;
        } else {
            $page = 1;
        }

        $jobs=$this->admin->jobs();
        if(sizeof($jobs)>0){
            $jobsView=$jobs['jobs'];
            Session::put('jobs',$jobsView);
        }
        else{
            $jobsView=[];
        }
        return view('admin.careers.career')->with('jobs',$jobs)->with('jobsView',$jobsView)->with('page',$page);
    }


    public function addjobs(){
        if (!session('user_name')) {
	    	return redirect('/admin-login');
        }
        return view('admin.careers.addjobs');
    }
    

    public function savejobs(Request $request){
        if (!session('user_name')) {
	    	return redirect('/admin-login');
        }
        $data = $request->all();

        $savejobs = $this->admin->savejobs($data);
        return $savejobs;
    }
    
    public function editjobs($id){
        if (!session('user_name')) {
	    	return redirect('/admin-login');
        }
        $editjobs = $this->admin->editjobs($id);
        return view('admin.careers.editjobs',compact('editjobs'));
    }

    public function updatejobs(Request $request){
        if (!session('user_name')) {
	    	return redirect('/admin-login');
        }
        $data = $request->all();

        $updatejobs = $this->admin->updatejobs($data);
        return $updatejobs;
    }


    public function appliedjobs(){
        if (!session('user_name')) {
	    	return redirect('/admin-login');
        }
        // return view('admin.careers.appliedjobs');

        if (isset($_GET['page'])) {
            $pagenumber = $_GET['page'];
            $page = ($pagenumber - 1) * 30 + 1;
        } else {
            $page = 1;
        }
        $jobsapplied=$this->admin->jobsapplied();
        return view('admin.careers.appliedjobs')->with('jobsapplied',$jobsapplied)->with('page',$page);
    }


    public function jobsappliedview($id){
        if (!session('user_name')) {
	    	return redirect('/');
        }

        $jobsappliedview = $this->admin->jobsappliedview($id);
        return view('admin.careers.jobapplied_view',compact('jobsappliedview'));
    }
}
