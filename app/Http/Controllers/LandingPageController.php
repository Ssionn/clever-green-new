<?php

namespace App\Http\Controllers;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landingpage.index');
    }

    public function contact()
    {
        return view('landingpage.contact');
    }

    public function about()
    {
        return view('landingpage.about');
    }
}