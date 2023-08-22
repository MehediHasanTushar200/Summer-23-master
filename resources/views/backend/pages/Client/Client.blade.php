
@extends('master')
@section('content')
 <h1> Client informatio table</h1>



                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Id</th>
                                   <th scope="col">First Name</th>
                                   <th scope="col">Last Name</th>
                                   <th scope="col">Present Adress</th>
                                   <th scope="col">Parmanent Address</th>
                                   <th scope="col">Phone Number</th>
                                   <th scope="col">Status</th>
                                   <th scope="col">Image</th>
                                   <th scope="col">Email</th>
                                   <th scope="col">Action</th>

                                </tr>
                            </thead>


                          <tbody>
                            @foreach($customers as $client)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$client->firstname}}</td>
                              <td>{{$client->lastname}}</td>
                              <td>{{$client->phone_number}}</td>   
                              <td>{{$client->present_address}}</td> 
                              <td>{{$client->permanent_address}}</td> 
                              <td>{{$client->status}}</td>  
                              <td>
                                <img style="width: 50px;" src="{{url('/uploads/customer/'.$client->image)}}" alt="">
                              </td>      
                                        
                              <td>{{$client->email}}</td>   
                           

                              <td>                             
                                <a  type="button" class="btn btn-danger" href="">Delete</a>
                              </td>

                            </tr>
@endforeach
                          </tbody>
                        </table>

@endsection