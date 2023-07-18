
@extends('master')
@section('content')
 <h1> Booking table table</h1>
 <a  type="button" class="btn btn-success" href="{{route('Booking.create')}}">Create</a>


                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Booking Id Id</th>
                                 <th scope="col">Client Id</th>
                                   <th scope="col">Property Id</th>
                                   <th scope="col">Shedule</th>
                                   <th scope="col">Description</th>
                                   <th scope="col">Date</th>
                                   <th scope="col">Action</th>
                                </tr>
                            </thead>


                          <tbody>
                      
                            <tr>  
                              <td>01</td>
                              <td>02</td>
                              <td>04</td>
                              <td>8:pm</td>
                              <td>hihiiiihihii</td>
                              <td>1/2/3</td>
                              

                             
                              
                              <td>
                                <a  type="button" class="btn btn-warning" href="">Show</a>
                                <a  type="button" class="btn btn-success" href="">Edit</a>
                                <a  type="button" class="btn btn-danger" href="">Delete</a>
                              </td>
                            </tr>

                          </tbody>
                        </table>

@endsection