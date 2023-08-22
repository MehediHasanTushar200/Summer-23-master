
@extends('master')
@section('content')
 <h1> Booking  table</h1>
 {{-- <a  type="button" class="btn btn-success" href="{{route('Booking')}}">Create</a> --}}


                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Id</th>
                                 <th scope="col">Full name</th>
                                   <th scope="col">Contact</th>
                                   <th scope="col">Email</th>
                                   <th scope="col">Address</th>
                                   <th scope="col">Apartment</th>
                                   <th scope="col">Project name</th>
                                   <th scope="col">Visit date </th>
                                   <th scope="col">Visit time </th>
                                   <th scope="col">Comment</th>
                                   <th scope="col">Action</th>
                                </tr>
                            </thead>


                          <tbody>
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
                                

                            
                              <td>
                                
                                <a type="button" class="btn btn-success" href="">
                                  <i class="fa fa-pencil"></i> <!-- Pencil icon for "Edit" -->
                                </a>
                                <a type="button" class="btn btn-danger" href="">
                                  <i class="fa fa-trash"></i> <!-- Trash icon for "Delete" -->
                                </a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>

@endsection