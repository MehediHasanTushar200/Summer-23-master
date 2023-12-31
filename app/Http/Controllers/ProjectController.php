<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Redis;




class ProjectController extends Controller

{

   public function home()
   {
      //   return view('frontend.pages.home');
     $allProjects=Project::latest()->take(4)->get();
     return view('frontend.pages.home',compact('allProjects'));
   }
   //.............................................................................
   
    Public function Project()

    {
    
      // $projects = Project::all();
      // dd(auth()->user()->name);
     
      $projects =Project::where('employee',auth()->user()->name)->get();
      
      $projects =Project::where('name',auth()->user()->name =='admin')->get();
      

      // dd($projects);
      return view('backend.pages.project.Project',compact('projects','projects'));
    }
    //...........................................................................

      public function Project_create()
    
    {
      // $projects = Project::all();
     
      $type=User::where('user_type','Employee')->get();
     return view('backend.pages.project.Project_create',compact('type'));
    }

    //.................................................................

     public function projectstore(Request $request)

    {
                //  dd($request->all());
                $request->validate
              ([                 
                'name'=>'required',            
                'start_date'=>'required',
                'end_date'=>'required'
              ]);
     //  dd($request->all());
 
      if($request->hasFile('image'))
      {
 
         $image=$request->file('image');
         $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
         $image->storeAs('/project',$fileName);
 
      }
         Project::create 
         ([
 
           'name'=>$request->name,
           'status'=>$request->status,
           'description'=>$request->description,
           'location'=>$request->location,
           'employee'=>$request->employee,
           'image'=>$fileName,
           'start_date'=>$request->start_date,
           'end_date'=>$request->end_date 
           
           
         ]);
         return redirect()->back()->with('msg',' Created successfully.');
  
        }
//.............................................................................

               public function showproject($type)
                {                   
                          // dd('$type');
                  $projects=Project::where('status',$type)->get();
                    
                    return view('frontend.pages.project.show', compact('projects'));
                }

//for delete .........................................................         
                public function delete($id)
                {
                  // dd('$id');
                  $projects=Project::find($id);
                   $projects->delete();
                   return redirect()->back()->with('msg','Product Deleted successfully.');
                }

// for edit...........................................................

                public function edit($id)
                {
                  // dd('$id');
                  $projects=Project::find($id);
                  // $projects = Project::all();
                   return view('backend.pages.project.edit',compact('projects'));
                }

//for update..................................................................................
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required'
        
    ]);

    $projects = Project::find($id); 
    $projects->update([
        
      'name'=>$request->name,
      'status'=>$request->status,
      'description'=>$request->description,
      'location'=>$request->location,
      // 'start_date'=>$request->start_date,
      // 'end_date'=>$request->end_date ,
      'extend_date'=>$request->extend_date 

    ]);
   
    return redirect()->back()->with('msg', 'Project updated successfully.');
     return redirect()->route('project.edit', $id);
}

//...........................................................................................
public function showmore($id)

{

  $projects=Project::find($id);
  
  return view('frontend.pages.project.showmore',compact('projects'));


}

}
