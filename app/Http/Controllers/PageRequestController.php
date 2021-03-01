<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageRequestController extends Controller
{
    public function viewLanding(){
        return view("landing.landingIndex");
    }
    public function viewAbout(){
        return view("about.aboutIndex");
    }
    // Event
    public function viewAwarding(){
        return view("event.awarding");
    }
    public function viewExhibition(){
        return view("event.exhibition");
    }
    public function viewPreevent(){
        return view("event.preevent");
    }    

    // BCC
    public function viewShs(){
        return view("bcc.shs");
    }
    public function viewUndergraduate(){
        return view("bcc.undergrad");
    }
    public function viewBootcamp(){
        return view("bcc.bootcamp");
    }
}
