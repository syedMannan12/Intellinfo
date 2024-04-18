<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('test', function () {
    return view('test');
});
Route::any('/','homecontroller@home');
Route::any('contact-us','homecontroller@contactus');
Route::any('services','homecontroller@services');
Route::any('industries','homecontroller@industries');

Route::any('technologies','homecontroller@technologies');
Route::any('about-us','homecontroller@aboutus');

// INDUSTRIES KNOW MORE LINKS

Route::get( 'industries-call-center','homecontroller@callcenter');
Route::get( 'industries-education','homecontroller@education');
Route::get( 'industries-health-care','homecontroller@healthcare');
Route::get( 'industries-hospitality','homecontroller@hospitality');
Route::get( 'industries-it','homecontroller@it');
Route::get( 'industries-music','homecontroller@music');
Route::get( 'industries-retail','homecontroller@retail');


// SERVIES KNOW MORE

// Route::get( 'services-software-development','homecontroller@softwaredevelopment');
Route::get( 'services-business-automation','homecontroller@businessautomation');
Route::get( 'services-web-solutions','homecontroller@websolutions');
Route::get( 'services-mobile-solutions','homecontroller@mobilesolutions');
Route::get( 'network','homecontroller@network');
Route::get( 'cloud-computing','homecontroller@cloudcomputing');
Route::get( 'it-consulting','homecontroller@itconsulting');
Route::get( 'cyber-security','homecontroller@cybersecurity');
Route::get( 'help-desk','homecontroller@helpdesk');
Route::get( 'data-backup-recovery','homecontroller@databackuprecovery');
Route::get( 'application-development-maintenance','homecontroller@applicationdevelopmentmaintenance');
Route::get( 'artifical-intelligence','homecontroller@artificalintelligence');
Route::get( 'machine-learning','homecontroller@machinelearning');
Route::get( 'internet-of-things','homecontroller@internetofthings');

// COMPANY 

Route::get( 'company','homecontroller@company'); 
Route::get( 'custom-software-development','homecontroller@customsoftware');
Route::get( 'offshore-development','homecontroller@offshoredevelopment');
Route::get( 'clients','homecontroller@clients');
Route::get( 'work-approach','homecontroller@workapproach');
Route::get( 'software-development-for-data-center','homecontroller@softwaredevelopmentfordatacenter');
Route::get( 'team-creation','homecontroller@teamcreation');
Route::get( 'project-management','homecontroller@projectmanagement');
Route::get( 'client-management','homecontroller@clientmanagement');























// FUNCTIONALITY URLS
Route::any('careers','functionalitycontroller@careers');
Route::any('get-jobs-details/{id}','functionalitycontroller@get_jobs_details');
Route::any( 'apply-jobs','functionalitycontroller@applyjobs');
Route::any( 'contactus','functionalitycontroller@contact_us');




// ADMIN FUNCTIONALITY 


Route::any('admin-login','admincontroller@admin_login');
Route::any('validate-log-in','admincontroller@validate_admin_log_in');
Route::any('dashboard','admincontroller@dashboard');
Route::any('contact-requests','admincontroller@contactrequests');
Route::any( 'applied-jobs','admincontroller@appliedjobs');
Route::get( 'jobs-applied-view/{id}','admincontroller@jobsappliedview');
Route::any('jobs','admincontroller@jobs');
Route::any('add-jobs','admincontroller@addjobs');
Route::any('save-jobs','admincontroller@savejobs');
Route::get( 'edit-jobs/{id}','admincontroller@editjobs');
Route::post('update-jobs', 'admincontroller@updatejobs');
Route::get('logout','admincontroller@logout');
Route::get( 'apply-job/{id}','homecontroller@applyjob');




