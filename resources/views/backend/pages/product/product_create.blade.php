@extends('master')
@section('content')
<h1>Create new product</h1>
{{-- for showing message --}}

@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif 


{{-- for cheking error --}}

@if ($errors->any())
  @foreach ($errors->all() as $error)
  <div>
    <p class="alert alert-danger">{{$error}}</p>
  </div>
  @endforeach
@endif


<form action="{{route('product.store')}}" method="post"  enctype="multipart/form-data">
  @csrf


  <div class="form-group">
  <label for="exampleInputPassword1">Name</label>
    <input name="name" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter your name">
  </div>
  
  <br>

  <div class="form-group">
  <label for="a">Select category</label>
  <select class="form-control" name="category_id" id="a">



                @foreach($categories as $category)
                   <option value="{{$category->id}}">{{$category->name}}</option>
                     @endforeach


  </select>
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
      <input name="description" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter description">
    </div>
  




  

 <br>

  <div class="form-group">
  <label for="exampleInputPassword1">Select image file</label>
    <input name="image" type="file" class="form-control" aria-describedby="emailHelp" placeholder="Enter image file">
  </div>


     <br>
  
        <button type="submit" class="btn btn-primary">Submit</button>
   </form>

@endsection