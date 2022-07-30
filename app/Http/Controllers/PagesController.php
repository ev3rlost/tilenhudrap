<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function biography()
    {
        return view('biography');
    }

    public function contact()
    {
        return view('contact');
    }
}
