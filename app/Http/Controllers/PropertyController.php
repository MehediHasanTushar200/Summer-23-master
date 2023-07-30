<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Property_types;

class PropertyController extends Controller
{
    public function Property()
    {
        $properties = Property::all();
       
        return view('backend.pages.Property.Property',compact('properties'));
    }

    public function create()
    {
    
        return view('backend.pages.Property.Property_create');
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



 public function edit($id)
   {

    $properties=Property::find($id);
  
    return view('backend.pages.property.edit',compact('properties'));


   }



   public function update(Request $request, $id)
   {
    $request->validate([
      'status' => 'required',
     
  ]);

  $properties = Property::find($id); 

  $properties->update([
      
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


}



