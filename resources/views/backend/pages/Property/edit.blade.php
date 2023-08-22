@extends('master')
@section('content')


<!DOCTYPE html>
<html>
<head>
  <title>Property Create Form</title>
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
    input[type="datetime-local"],
    select {
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
  </style>
</head>
<body>
  <h1>Property update Form</h1>


  @if(session()->has('msg'))
  <p class="alert alert-success">{{session()->get('msg')}}</p>
  @endif
  <form action=" {{route('property.update',$properties->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" >   

    <label for="status">  Select Property Status:</label>
    <select id="status" name="status" class="custom-dropdown" >
    
      <option >Luxury Properties</option>
      <option >Residential Properties</option>
      <option >Commercial Properties</option>
  
  
    </select>

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4" cols="50" required>{{$properties->description}}</textarea>

    <label for="address">Address:</label>
    <input value='{{$properties->address}}'   type="text" id="address" name="address" required>

    <label for="image">Image:</label>
    <input value=''  type="file" id="image" name="image" required>

    <label for="price">Price:</label>
    <input value='{{$properties->price}}'  type="text" id="price" name="price" required>

   

    <input type="submit" value="Submit">
  </form>
</body>
</html>



@endsection