<?php

namespace App\Http\Controllers;
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
            return redirect()->route('categories');

        }
            return redirect()->route('admin.login');
        // if(auth::guard('admin')->attempt(['name'=>$request->name,'password'=>$request->password]))
        // {

        //     return redirect();

        // }
    }

    public function destroy()

     {


        auth()->logout();
        
        
        return redirect()->route('admin.login')->with('msg',' Logout successfully.');


     }


}

