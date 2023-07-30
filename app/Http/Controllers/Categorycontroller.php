<?php

namespace App\Http\Controllers;
use App\Models\category;

use Illuminate\Http\Request;

class categorycontroller extends Controller
{
            public function categories()

             {
                $category=category::paginate(3);

                return view('backend.pages.category.category',compact('category'));
                         
                
              }

 //............................................................................     
            public function create()

            {

              return view('backend.pages.category.category_create');
        
        
            }

 //............................................................................
 public function store(Request $request)

 {
     $request->validate
               ([
                    
               'name'=>'required'

               ]);
    //  dd($request->all());

     if($request->hasFile('image'))
     {

        $image=$request->file('image');
        $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
        $image->storeAs('/category',$fileName);

     }
        Category::create 
        ([

          'name'=>$request->name,
          'description'=>$request->description,
          'image'=>$fileName

        ]);


    
        return redirect()->back()->with('msg',' Created successfully.');


   }


//  ............................edite methode..................................


   public function edit(Request $request)
   
   {
  
    // dd('tushar');
    
     return view ('backend.pages.category.category_edit');
    
  

   }
   

}













