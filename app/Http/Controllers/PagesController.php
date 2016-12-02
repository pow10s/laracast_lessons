<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        $people= ['olya','yura','yurich','dimon'];
        return view('pages.about',['people'=>$people]);
    }

    public function contact(){

        return view('pages.contact');

    }
}
