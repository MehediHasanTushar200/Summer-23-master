<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Booking;

class ReportController extends Controller
{
    Public function Report()

    {
           
                    return view('backend.pages.Report.Report');


    }
 
   

    Public function reportSearch(Request $request)
    {
        $request->validate([

            'from_date'=>'required|date',
            'to_date'=>'required|date|after:from_date',

            ]);
            $from=$request->from_date;
            $to=$request->to_date;
            $projects = Project::whereBetween('created_at',[$from,$to])->get();

         return view('backend.pages.Report.Report',compact('projects'));


    }


            public function allReport()
            {

             return view('backend.pages.Report.allreport');

            }
            public function bookingReport ()
            {

             return view('backend.pages.Report.bookingreport');

            }




            public function bokkingreportSearch(Request $request)
            
            {


                $request->validate([

                    'from_date'=>'required|date',
                    'to_date'=>'required|date|after:from_date',
        
                    ]);
                    $from=$request->from_date;
                    $to=$request->to_date;
                    $bookings = Booking::whereBetween('created_at',[$from,$to])->get();
        
                 return view('backend.pages.Report.bookingreport',compact('bookings'));

            }
}
