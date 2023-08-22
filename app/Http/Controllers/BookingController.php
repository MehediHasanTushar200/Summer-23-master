<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Project;

class BookingController extends Controller
{
    public function Booking()

              {     
                $bookings=Booking::all();
                return view('backend.pages.Booking.booking',compact('bookings'));   
              }


              public function Bookingnew($id)
              { 
                $data = Project::find($id);
                // dd($id);
                 return view('frontend.pages.booking.booking_create',compact('data'));               
              }

               public function Bookingstore(Request $request)

              {         
                  // dd($request->all());
                  $request->validate
                  ([
                        
                  'full_name'=>'required',
                  'contact_number'=>'required',
                  'address'=>'required',
                  'email'=>'required'


                  ]);
//  dd($request->all());
// $fileName=null;

// if($request->hasFile('image'))
// {

// $image=$request->file('image');
// $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
// $image->storeAs('/agent',$fileName);

// }
Booking::create 
            ([

                'full_name'=>$request->full_name,
                'contact_number'=>$request->contact_number,
                'address'=>$request->address,
                'email'=>$request->email,
                'status'=>$request->status,
                'appartment_name'=>$request->appartment_name,
                'visit_date'=>$request->visit_date,
                'visit_time'=>$request->visit_time,
                'additional_comments'=>$request->additional_comments
            ]);



                return redirect()->back()->with('msg',' booking successfully.');         
        }

        




}

