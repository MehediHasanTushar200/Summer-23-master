<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function Booking()

             {
              

                return view('backend.pages.Booking.Booking');
                         
                
              }
              public function Bookingnew()

              {
               
 
                 return view('backend.pages.Booking.Booking_create');
                          
                 
               }



}

