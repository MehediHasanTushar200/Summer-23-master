
@extends('master')
@section('content')

 <h1> Project Report</h1>
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
<form action="{{route('Report.search')}}" method="get">
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
  <div id="projectReport">
  <h1>Report of - {{request()->from_date}} to  {{request()->to_date}}</h1>
      <table class="table table-striped">
          <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">project_status</th>
              <th scope="col">description</th>
              <th scope="col">location</th>
              <th scope="col">Adding Date</th>
          </tr>
          </thead>
          <tbody>
          @if(isset($projects))
                              @foreach($projects as $project)
                              <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$project->name}}</td>
                                <td>{{$project->status}}</td>
                                <td>{{$project->description}}</td>
                                <td>{{$project->location}}</td>
                                <td>{{$project->created_at}}</td>
                                                   
                               </tr>
          @endforeach
          @endif
          </tbody>
      </table>
  </div>
  <button onclick="printDiv('projectReport')" class="btn btn-success">Print</button>
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