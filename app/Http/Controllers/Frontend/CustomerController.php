<?php

namespace App\Http\Controllers\frontend;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function doregistration(Request $request)
    {

            //  dd($request->all());


        $request->validate

        ([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:customers',
            'password'=>'required'
        ]);

        Customer::create

        ([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'password'=>bcrypt($request->password),
            'email'=>$request->email
        ]);

            return redirect()->route('home')->with('msg','Registration successfully.');

    }
    
            public function dologin(Request $request)
     {

        // $credentials=$request->except('_token');

        // dd($credentials);
        if(auth()->guard('customer')->attempt(Request()->only(['email','password'])))
        // if(auth()->guard('customer')->attempt($credentials))

        {
            return redirect()->route('home');
            // dd("valid user");
        }

            // dd("invalid user");
            
            return redirect()->back()->with('msg', 'login successfull.');
    }

    

}
