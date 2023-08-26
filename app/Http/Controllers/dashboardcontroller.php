<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Property;
use App\Models\Booking;
use App\Models\Customer;

class dashboardcontroller extends Controller
{
    public function dashboard(){

        $projects=Project::all()->count();
        $customers=Customer::all()->count();
        $bookings=Booking::all();

return view('backend.pages.dashboard',compact('projects','bookings','customers'));


    }
    


}
