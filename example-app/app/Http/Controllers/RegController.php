<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function getreg(){
        return view ('layout.reg');
    }

    public function postreg(){
        
    }
}
