<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
     public function about ()
     {

         return view ('frontend.pages.aboutus');


     }
}
