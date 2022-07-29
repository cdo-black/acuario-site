<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('site.welcome');
    }

    public function about()
    {
        return view('site.about');
    }
    
    public function coleges()
    {
        return view('site.coleges');
    }
    
    public function contact()
    {
        return view('site.contact');
    }
}
