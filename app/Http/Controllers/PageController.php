<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Inicio\Slide;

class PageController extends Controller
{
    public function welcome()
    {
        $slides = Slide::where('estado', 'Publico')->get();

        return view('site.welcome', compact('slides'));
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
