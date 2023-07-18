<?php

namespace App\Http\Controllers\frontend;
// use App\Mail\ContactMail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.pages.contact');
    }
  
    // public function sendMail(Request $request)
    // {
    //     $details = [
    //         'name'=>$request->name,
    //         'email' => $request->email,
    //         'phone_number'=>$request->phone,
    //         'message' => $request->message
    //     ];

    //      Mail::to('hasantsuhar373@gmail.com')->send(new Conatctmail($details));

    //     return redirect()->back()->with('msg', 'Your message sent successfully');
    // }
}
