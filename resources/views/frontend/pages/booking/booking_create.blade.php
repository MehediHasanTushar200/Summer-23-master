@extends('frontend.frontend_master')
@section('content')

<!DOCTYPE html>
<html>
<head>
  <title>Booking Create Form</title>
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
      padding: 50px;
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
    input[type="datetime-local"],
    textarea,
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

  @if(session()->has('msg'))
  <p class="alert alert-success">{{session()->get('msg')}}</p>
  @endif

  <form action="{{route('Booking.store')}}" method="POST">
    @csrf
    <h1>Booking Create Form</h1>
    <label for="full_name">Full Name:</label>
    <input type="text" id="full_name" name="full_name" required>

    <label for="contact_number">Contact Number:</label>
    <input type="text" id="contact_number" name="contact_number" required>

    <label for="address">Address:</label>
    <input  type="text" id="address" name="address" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    {{-- <label for="preferred_apartment">Preferred Apartment:</label>
    <select id="preferred_apartment" name="preferred_apartment" required>
      <option value="luxury">Luxury Apartment</option>
      <option value="commercial">Commercial Apartment</option>
      <option value="residential">Residential Apartment</option>
    </select> --}}

    <label for="status">Preferred apartment:</label>
    <input value="{{$data->status}}"  type="text" id="status" name="status" required>

   
    <label for="appartment_name">Project name:</label>
    <input value="{{$data->name}}" type="text" id="appartment_name" name="appartment_name" required>

    <label for="visit_date">Visit Date:</label>
    <input type="date" id="visit_date" name="visit_date" >
    <br>

    <label for="visit_time">Visit Time:</label>
    <input type="time" id="visit_time" name="visit_time" >
<br>
    <label for="additional_comments">Additional Comments:</label>
    <textarea id="additional_comments" name="additional_comments" rows="4" cols="50" required></textarea>

    <input type="submit" value="Submit">
    
 
  </form>
</body>
</html>
@endsection