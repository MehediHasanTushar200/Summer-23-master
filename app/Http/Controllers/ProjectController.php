<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    Public function Project(){

        return view('backend.pages.project.Project');

    }

       public function Project_create()
    
    {

           return view('backend.pages.project.Project_create');


    }


     public function Projectstore(Request $request)

    {
                 dd($request->all());
    }
}
