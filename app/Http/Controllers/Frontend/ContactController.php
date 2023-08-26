<?php

namespace App\Http\Controllers\frontend;
// use App\Mail\ContactMail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

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

    public function backendcontact()

    {
        $contacts=Contact::all();
        return view('backend.pages.Contact_us.Contact',compact('contacts'));
    }
  

   public function frontendcontactstore(Request $request)
   {
    Contact::create([
      'name'=>$request->name,
      'email'=>$request->email,
      'subject'=>$request->subject,
      'message'=>$request->message
    ]);
    return redirect()->back()->with('msg',' Created successfully.');

   }



   public function delete($id)
   {
   
    $contacts=Contact::find($id);
    $contacts->delete();
    return redirect()->back()->with('msg','contact Deleted successfully.');
   
   
   }
   



   }


