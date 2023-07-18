<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SheduleController extends Controller
{
    public function Shedule()

             {
              

                return view('backend.pages.Shedule.Shedule');
                         
                
              }
              public function Shedulenew()

             {
              

                return view('backend.pages.Shedule.Shedule_create');
                         
                
              }
              
}
