
@extends('master')
@section('content')
 <h1> Shedule table</h1>
 <a  type="button" class="btn btn-success" href="">Create</a>


                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Shedule Id Id</th>
                                   <th scope="col">Property Id</th>
                                   <th scope="col">Date</th>
                                   <th scope="col">Time</th>
                                   <th scope="col">Action</th>
                                </tr>
                            </thead>


                          <tbody>
                      
                            <tr>  
                              <td>01</td>
                              <td>02</td>
                              <td>1/2/3</td>
                              <td>10:00 a.m</td>
                              
                              <td>
                                <a  type="button" class="btn btn-warning" href="">Show</a>
                                <a  type="button" class="btn btn-success" href="">Edit</a>
                                <a  type="button" class="btn btn-danger" href="">Delete</a>
                              </td>
                            </tr>

                          </tbody>
                        </table>

@endsection