<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){
        return view('dasboard')->with('homepage');
    }

    public function about(){
        return view('pages.about')->with('about');
    }

}
