<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    Public function Report()
    {

return view('backend.pages.Report.Report');


    }
 
    Public function Reportnew()
    {

        return view('backend.pages.Report.Report_create');
        
        
            }

}
