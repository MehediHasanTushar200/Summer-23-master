
@extends('master')
@section('content')

 <h1> Booking Report</h1>
            @if(session()->has('msg'))
            <p class="alert alert-success">{{session()->get('msg')}}</p>
            @endif
    @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div>
                <p class="alert alert-danger">{{$error}}</p>
            </div>
            @endforeach
    @endif
<form action="{{route('booking.Report.search')}}" method="get">
    <div class="row">
      <div class="col-md-4">
          <label for="">From date:</label>
          <input value="{{request()->from_date}}" name="from_date" type="date" class="form-control"> 
      </div>
      <div class="col-md-4">
          <label for="">To date:</label>
          <input value="{{request()->to_date}}" name="to_date" type="date" class="form-control">
      </div>
      <div class="col-md-4">
          <button type="submit" class="btn btn-success">Search</button>
      </div>
    </div>
</form>
  <div id="bookingReport">
  <h1>Report of - {{request()->from_date}} to  {{request()->to_date}}</h1>
      <table class="table table-striped">
          <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Full name</th>
              <th scope="col">Contact</th>
              <th scope="col">Address</th>
              <th scope="col">Email</th>
              <th scope="col">Apartment</th>
              <th scope="col">Project name</th>
              <th scope="col">Visit date </th>
              <th scope="col">Visit time </th>
              <th scope="col">Comment</th>
          </tr>
          </thead>
          <tbody>
          @if(isset($bookings))

         
          @foreach($bookings as $booking)
          <tr>  
            <th scope="row">{{$loop->iteration}}</th>
              <td>{{$booking->full_name}}</td>
              <td>{{$booking->contact_number}}</td>
              <td>{{$booking->address}}</td>
              <td>{{$booking->email}}</td>
              <td>{{$booking->status}}</td>
               <td>{{$booking->appartment_name}}</td>
              <td>{{$booking->visit_date}}</td>
              <td>{{$booking->visit_time}}</td>
             <td>{{$booking->additional_comments}}</td>                
          </tr>
          @endforeach
          @endif
          </tbody>
      </table>
  </div>
  <button onclick="printDiv('bookingReport')" class="btn btn-success">Print</button>
  <script>
      function printDiv(divId){
          var printContents = document.getElementById(divId).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
  </script>
@endsection