<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function myname(){
        return 'my name is larry';
    }

    public function home(){
        return view ('layout.home');
    }

    public function about (){
        return view ('layout.about');
    }

    public function lapp(){
        return view('layout.lapp');
    }

    public function gallery(){
        return view('layout.gallery');
    }

    public function contact(){
        return view('layout.contact');
    }

    public function welcome(){
        return view('welcome');
    }
}
