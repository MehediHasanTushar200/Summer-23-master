<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {

        $product=product::paginate(3);
        
        $product=product::with('tushar')->paginate(3);

        return view('backend.pages.product.products',compact('product'));
        
        
    }
    public function create()
    {
       $categories=category::all();
        return view('backend.pages.product.product_create',compact('categories'));
        
        
    }
    public function store(Request $request)

    {

        // dd($request->all());
        $request->validate
                  ([
                       
                  'name'=>'required',
                  'category_id'=>'required'
   
                  ]);
       //  dd($request->all());
   
        if($request->hasFile('image'))
        {
   
           $image=$request->file('image');
           $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
           $image->storeAs('/product',$fileName);
   
        }
           Product::create 
           ([
   
             'name'=>$request->name,
             'category_id'=>$request->category_id,

             'description'=>$request->description,
             'image'=>$fileName

   
           ]);
   
   
       
           return redirect()->back()->with('msg',' Created successfully.');
   
   
      }
   
   


}
