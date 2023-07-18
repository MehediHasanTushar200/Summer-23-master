<?php

namespace App\Http\Controllers\frontend;
use App\Models\category;
use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
            $allproducts=Product::take(4)->get();
            return view('frontend.pages.home',compact('allproducts'));

    }
  

public function registration()
 
    {


             return view('frontend.pages.registration');


    }

 public function user() 
          {

              return view('frontend.pages.user_login');
       
           }




    
}
