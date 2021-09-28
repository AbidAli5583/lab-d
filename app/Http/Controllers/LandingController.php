<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        return view('landing/landing');
    }

    public function about_us()
    {
        return view('landing.about-us');
    }


    public function services()
    {
        return view('landing.service');
    }
     public function contact()
    {
        return view('landing.contact');
    }
}
