@extends('master')
@section('content')

<!DOCTYPE html>
<html>
<head>
  <title>Agent Create Form</title>
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
    input[type="email"],
    input[type="tel"],
    textarea {
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
  <h1>Agent Add Form</h1>
  <form action="{{route('Agent.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="address">Address:</label>
    <textarea id="address" name="address" rows="4" cols="50" required></textarea>
    
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" required>

    <input type="submit" value="Submit">
  </form>
</body>
</html>

@endsection
