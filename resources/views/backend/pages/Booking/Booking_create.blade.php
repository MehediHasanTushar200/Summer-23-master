@extends('master')
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
    input[type="datetime-local"],
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
  <h1>Booking Create Form</h1>
  <form action="{{route('Booking.create')}}" method="POST">
    @csrf
    <label for="client_id">Client ID:</label>
    <input type="text" id="client_id" name="client_id" required>

    <label for="property_id">Property ID:</label>
    <input type="text" id="property_id" name="property_id" required>

    <label for="schedule">Schedule:</label>
    <input type="text" id="schedule" name="schedule" required>

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>

    <input type="submit" value="Submit">
  </form>
</body>
</html>

@endsection
