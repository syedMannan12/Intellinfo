<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //

    public function home(){
        return view('home.index');
    }

    public function careers(){
        return view('home.index');
    }

    public function contactus(){
        return view('contactus.index');
    }

    public function aboutus(){
        return view('aboutus.index');
    }

    public function services(){
        return view('services.index');
    }

    public function industries(){
        return view('industries.index');
    }
    public function technologies(){
        return view('technologies.index');
    }


    // INDUSTRIES KNOW MORE
    public function callcenter(){
        return view('industries.industriesKnowMore.callcenter');
    }
    public function education(){
        return view('industries.industriesKnowMore.education');
    }
    public function healthcare(){
        return view('industries.industriesKnowMore.healthcare');
    }
    public function hospitality(){
        return view('industries.industriesKnowMore.hospitality');
    }
    public function it(){
        return view('industries.industriesKnowMore.it');
    }
    public function music(){
        return view('industries.industriesKnowMore.music');
    }
    public function retail(){
        return view('industries.industriesKnowMore.retail');
    }



    // SERVIES KNOW MORE

    // public function softwaredevelopment(){
    //     return view('services.servicesKnowMore.softwaredevelopment');
    // }
    public function businessautomation(){
        return view('services.servicesKnowMore.businessautomation');
    }
    public function websolutions(){
        return view('services.servicesKnowMore.websolutions');
    }
    public function mobilesolutions(){
        return view('services.servicesKnowMore.mobilesolutions');
    }

    public function network(){
        return view('services.servicesKnowMore.network');
    }
    public function cloudcomputing(){
        return view('services.servicesKnowMore.cloudcomputing');
    }
    public function itconsulting(){
        return view('services.servicesKnowMore.itconsulting');
    }
    public function cybersecurity(){
        return view('services.servicesKnowMore.cybersecurity');
    }
    public function helpdesk(){
        return view('services.servicesKnowMore.helpdesk');
    }
    public function databackuprecovery(){
        return view('services.servicesKnowMore.databackuprecovery');
    }
    public function applicationdevelopmentmaintenance(){
        return view('services.servicesKnowMore.applicationdevelopmentmaintenance');
    }
    public function artificalintelligence(){
        return view('services.servicesKnowMore.artificalintelligence');
    }
    public function machinelearning(){
        return view('services.servicesKnowMore.machinelearning');
    }
    public function internetofthings(){
        return view('services.servicesKnowMore.internetofthings');
    }


    // COMPANY 

    public function company(){
        return view('company.company');
    }


    public function customsoftware(){
        return view('company.customsoftware');
    }

    public function offshoredevelopment(){
        return view('company.offshoredevelopment');
    }

    public function clients(){
        return view('company.clients');
    }

    public function workapproach(){
        return view('company.workapproach');
    }
    public function softwaredevelopmentfordatacenter(){
        return view('company.softwaredevelopmentfordatacenter');
    }
    public function teamcreation(){
        return view('company.');
    }
    public function projectmanagement(){
        return view('company.projectmanagement');
    }
    public function clientmanagement(){
        return view('company.clientmanagement');
    }
}
