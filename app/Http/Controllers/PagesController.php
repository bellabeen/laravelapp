<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){
        return view('pages.homepage', compact('homepage'));
    }

    public function about(){
        return view('pages.about', compact('about'));
    }
    
}
