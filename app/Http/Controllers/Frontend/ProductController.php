<?php

namespace App\Http\Controllers\frontend;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allproducts()
    {


return view('frontend.pages.all-products');

    }
}