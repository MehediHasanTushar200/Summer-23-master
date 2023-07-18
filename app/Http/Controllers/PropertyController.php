<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function Property()
    {
        return view('backend.pages.Property.Property');
    }

    public function create()
    {
        return view('backend.pages.Property.Property_create');
    }


}



