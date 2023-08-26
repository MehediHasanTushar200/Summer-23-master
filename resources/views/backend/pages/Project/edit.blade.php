@extends('master')
@section('content')

<!DOCTYPE html>
<html>
<head>
  <title>Projct Create Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      background-color: #f5f5f5;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    label {
      display: block;
      margin-bottom: 12px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    textarea,
    input[type="datetime-local"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
      margin-bottom: 20px;
      font-size: 16px;
    }

    textarea {
      resize: vertical;
    }

    input[type="submit"] {
      background-color: #ff4f00;
      color: #fff;
      padding: 12px 24px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #e63b00;
    }
    
  .custom-dropdown {
    /* Add your desired styles here */
    width: 200px; /* Adjust width as needed */
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    font-size: 16px;
    color: #333;}
</style>

  
</head>
<body>
  <h1>Project update Form</h1>
            @if(session()->has('msg'))
                <p class="alert alert-success">{{session()->get('msg')}}</p>
            @endif
  <form action="{{route('project.update',$projects->id)}}" method="post" enctype="multipart/form-data" >
    @csrf
    @method('put')
    <label for="name">Name:</label>
    <input value="{{$projects->name}}" type="text" id="name" name="name" required> 

   
    <label for="status"> Select Projects type:</label>
    <select    id="status" name="status" class="custom-dropdown" required>
    
      <option >Upcoming</option>
      <option >Ongoing</option>
      <option >Compelet</option>
  
  
    </select>
    



    <label for="description">Description:</label>
    <textarea  id="description" name="description" rows="4" cols="50" required>{{$projects->description}}</textarea>

    <label for="location">Location:</label>
    <input value="{{$projects->location}}" type="text" id="location" name="location" required>

    {{-- <label for="imaghe">Image:</label>
    <input  value="{{$projects->image}}" type="file" id="image" name="image" >
  --}}

    {{-- <label for="start_date">Start Time:</label>
    <input  value="{{$projects->start_date}}" type="datetime-local" id="start_date" name="start_date" >

    <label for="end_date">End Time:</label>
    <input value="{{$projects->end_date}}"type="datetime-local" id="end_date" name="end_date" >
     --}}
    <label for="extend_date">Extend date:</label>
    <input  value="" type="datetime-local" id="extend_date" name="extend_date" >


    <input type="submit" value="update">
  </form>
</body>
</html>

@endsection
