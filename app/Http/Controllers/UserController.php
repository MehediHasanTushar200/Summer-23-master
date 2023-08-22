<?php

namespace App\Http\Controllers;

use App\Models\User;
use Database\Seeders\UsersTableSeeder;
use Illuminate\Http\Request;
use Illuminate\Suport\Facades\Auth;


class UserController extends Controller
{
    public function login()
    {


        return view('backend.pages.login');

    }


    public function loginn(Request $request)

    {

            if(auth()->attempt(Request()->only(['email','password'])))


        {
            return redirect()->route('dashboard');

        }
            return redirect()->route('admin.login');
       
    }

    public function destroy()

     {


        auth()->logout();
        
        
        return redirect()->route('admin.login')->with('msg',' Logout successfully.');


     }

//for usercreate admin...............................................................................
     public function  usercreate()

     {
        
        return view('backend.pages.usercreate');


     }


     public function userloginn(Request $request)
     {



        $request->validate

        ([
            
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'user_type'=>'required'
        ]);

        User::create

        ([
            
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'user_type'=>$request->user_type
        ]);

            return redirect()->route('user.create')->with('msg','user create successfully.');


     }






     //user profile
     public function employeeprofile()
     
     {


        return view('backend.pages.employeeprofile.employee');


     }
}

