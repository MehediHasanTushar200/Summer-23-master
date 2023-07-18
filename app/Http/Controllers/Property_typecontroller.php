<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Property_typecontroller extends Controller
{
    Public function Property_type ()
    {


 return view('backend.pages.Property_type.Property_type');

    }

    Public function Property_type_create ()
    {


 return view('backend.pages.Property_type.Property_type_create');

    }

}

