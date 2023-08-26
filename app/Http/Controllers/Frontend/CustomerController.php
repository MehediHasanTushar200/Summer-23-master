<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function doregistration(Request $request)
    {

 
        $request->validate

        ([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:customers',
            'password'=>'required'
        ]);

        Customer::create

        ([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'password'=>bcrypt($request->password),
            'email'=>$request->email
        ]);

            return redirect()->route('home')->with('msg','Registration successfully.');

    }
    

        
public function dologin(Request $request)
{
    if (auth()->guard('customer')->attempt(Request()->only(['email', 'password']))) {
        Session::flash('toastr', [
            'type' => 'success',
            'message' => 'Login successful. Welcome back!',
        ]);
        return redirect()->route('home');
    }

    Session::flash('toastr', [
        'type' => 'error',
        'message' => 'Invalid credentials. Please try again.',
    ]);
    return redirect()->back();
}

public function userlogout()
{
    auth()->guard('customer')->logout();
    Session::flash('toastr', [
        'type' => 'success',
        'message' => 'Logout successful. See you again!',
    ]);
    return redirect()->route('home');
}





public function editprofile()
{

    $customers=Customer::find(auth('customer')->user()->id);
    return view('frontend.pages.userprofile.editprofile',compact('customers'));



}



public function saveprofile(Request $request,$id)
{
    
    $customers = Customer::find(auth('customer')->user()->id); 
    
    // dd($request->all());
    if($request->hasFile('image'))
    {

       $image=$request->file('image');
       $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
       $image->storeAs('/customer',$fileName);

    }
    $customers->update([

      'firstname'=>$request->firstname,
      'lastname'=>$request->lastname,
      'present_address'=>$request->present_address,
      'permanent_address'=>$request->permanent_address,
      'image'=>$fileName,
      'phone_number'=>$request->phone_number,
      
      
    ]);
   
   
    return redirect()->back()->with('msg', ' save profile successfully.');
   


}


        public function Client()


        {
            $customers=Customer::all();

        return view('backend.pages.client.client',compact('customers'));

        }

        public function delete($id)
        {

        $customers=Customer::find($id);
        $customers->delete();
        return redirect()->back()->with('msg','customer Deleted successfully.');


        }


}
