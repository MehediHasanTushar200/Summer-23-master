<?php

namespace App\Http\Controllers\frontend;
use App\Models\category;
use App\Models\product;

use App\Http\Controllers\Controller;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // for image showing in  frontend
    public function home()
    {
            // $allprojects=Project::where(4)->get();
            $projects=Project::where('project_type','Ongoing')->get();
            return view('frontend.fixed.home',compact('projects'));

    }





    
    //............
  

public function registration()
 
    {


             return view('frontend.pages.registration');


    }

 public function user() 
          {

              return view('frontend.pages.user_login');
       
           }


    public function projectshow($id) 
          {
            $project=Project::find($id);
              return view('frontend.pages.show',compact('project'));
       
           }
          





           public function search()
           {
       
             $searchKey=request()->search;
       
             // where('column_name','comparison','value')
             // example: where('price','=',100);
             // example: where('name','habijabi');
       
             //LIKE % Tushar      ---->matching from right side
             //LIKE Tushar %      ----->matching from left side
       
             $allprojects=Project::where('location','LIKE','%'.$searchKey.'%')->get();
       
            
             return view('frontend.pages.search-project',compact('allprojects','searchKey'));
       
       
             
           }





    
}
