<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function getreg(){
        return view ('layout.reg');
    }

    public function postreg(Request $request){
        /* to display input details
        return $request -> all();
        */
        
        //for validation
       $this->validate($request, [
            'fullname'=> 'required|string',
            'email'=> 'email|required',
            'username' => 'required',
            'phone_number' => 'required',
            'address'=>'required',
            'paddress'=>'required',
            'nidnumber'=> 'required',
            'password'=> 'required|min:|max:20'
        ]);
        return $request->all();
    }
}
