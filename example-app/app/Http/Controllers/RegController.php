<?php

namespace App\Http\Controllers;

use App\Models\Reg;
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
        
        //return $request->all();

        //save into DB
        $reg = new Reg();
        $reg -> fullname = $request -> fullname;
        $reg -> email = $request -> email;
        $reg -> username = $request -> username;
        $reg-> phone_number = $request -> phone_number;
        $reg -> address =$request -> address;
        $reg -> paddress = $request -> paddress;
        $reg -> nidnumber = $request -> nidnumber;
        $reg -> password = bcrypt($request -> password);

        $reg->save();

        return redirect()->back()->with('success', 'Regstration successful');

    }
}
