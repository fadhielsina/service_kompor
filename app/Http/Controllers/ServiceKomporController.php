<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceKomporController extends Controller
{
    public function index()
    {
        return view('new_front/index');
    }

    public function aboutus()
    {
        return view('new_front/aboutus');
    }

    public function contactus()
    {
        return view('new_front/contactus');
    }
}
