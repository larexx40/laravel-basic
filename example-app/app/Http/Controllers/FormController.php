<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function getForm(){
        return view('layout.contact');
    }

    public function postForm(Request $request){
     /*   $this->validate($request, [
            'name'=> 'required|string',
            'email'=> 'email|required',
            'password'=> 'required|max:20|min:8'
        ]);
        return $request->all();
        */

        $messages = [
            'name.required' => 'Please enter your name',
            'email.required' => 'please enter a valid email address',
            'passwprd.required' => 'please enter tout password',
            'password.min' => 'please your password should be longer than 4 letters',
            'password.max' => 'please your password should not be longer than 20 letters'
        ];

        $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8|max:20'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){
            return redirect()->back()->with('error', 'There is an error with one of your input');
        }

        $user = new User();
        $user-> name = $request-> name;
        $user-> email =$request-> email;
        $user -> password = bcrypt($request-> password);

        $user->save();
        return redirect()->back()->with('success', 'New User created');

       

        //return $request->all();
    }

    public function retrieveUsers(){
        $users = User::all();
        return view('layout.retrieve', ['users'=>$users]);
    }
    
}
