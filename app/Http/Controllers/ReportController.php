<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
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
            

}
