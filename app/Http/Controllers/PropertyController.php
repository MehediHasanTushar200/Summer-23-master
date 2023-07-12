<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function Property()
    {
        return view('backend.pages.Property.Property');
    }
}
