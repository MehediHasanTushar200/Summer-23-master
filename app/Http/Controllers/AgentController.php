<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;

class AgentController extends Controller
{
    Public function Agent()
    {
        $agents = Agent::all();
       
        return view('backend.pages.Agent.Agent',compact('agents'));


    }

     public function Agentadd()
     {


        return view('backend.pages.Agent.Agent_add');


     }

     public function agentstore( Request $request)

     {

     
    // dd($request->all());
     $request->validate
     ([
          
     'name'=>'required',
     'email'=>'required',
     'phone'=>'required'

     ]);
//  dd($request->all());
// $fileName=null;

if($request->hasFile('image'))
{

$image=$request->file('image');
$fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
$image->storeAs('/agent',$fileName);

}
Agent::create 
([

    'name'=>$request->name,
    'email'=>$request->email,
    'phone'=>$request->phone,
    'address'=>$request->address,
    'image'=>$fileName


]);



return redirect()->back()->with('msg',' Created successfully.');


}



}
