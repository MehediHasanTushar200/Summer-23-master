<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Property_types;
use App\Models\Project;

class PropertyController extends Controller
{
    public function Property()
    {
        $properties = Property::with('project')->get();
       
        return view('backend.pages.Property.Property',compact('properties'));
    }

    public function create()
    {
        // $porperties=Property::all();
        $projects = Project::all();
        return view('backend.pages.Property.Property_create',compact('projects'));
    }


    public function store(Request $request)
    {

        // dd($request->all());
        
      if($request->hasFile('image'))
      {
 
         $image=$request->file('image');
         $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
         $image->storeAs('/property',$fileName);
 
      }

        $request->validate
                ([            
                'address'=>'required',
                'price'=>'required'
 
                ]);

                Property::create 
                ([
                  'project_id'=>$request->project_id,
                  'status'=>$request->status,
                  'description'=>$request->description,
                  'address'=>$request->address,
                  'price'=>$request->price,
                  'image'=>$fileName
        
                ]);
        
        
            
                return redirect()->back()->with('msg',' Created successfully.');

    }

   public function delete($id)
   {

    $properties=Property::find($id);
    $properties->delete();
    return redirect()->back()->with('msg','Product Deleted successfully.');


   }

//....................................................................................

 public function edit($id)
   {

    $properties=Property::find($id);
  
    return view('backend.pages.property.edit',compact('properties'));


   }

//....................................................................................

   public function update(Request $request, $id)
   {
    $request->validate([
      'status' => 'required',
     
  ]);

  $properties = Property::find($id); 

  $properties->update([
    'name'=>$request->name,
    'status'=>$request->status,
    'description'=>$request->description,
    'address'=>$request->address,
    'price'=>$request->price
    
  ]);
 
  return redirect()->back()->with('msg', 'Property updated successfully.');
   return redirect()->route('property.edit', $id);
}



   public function showproperty($type)
   {

    $properties=Property::where('status',$type)->get();
                    
    return view('frontend.pages.property.show', compact('properties'));

   }
//..............................................................

public function view($id)

{

  $properties=Property::find($id);
  
  return view('frontend.pages.property.view',compact('properties'));


}

}



