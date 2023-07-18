
@extends('master')
@section('content')
 <h1> Report table</h1>
 <a  type="button" class="btn btn-success" href="{{route('Report.create')}}">Create</a>


                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Report Id</th>
                                   <th scope="col">Property Id</th>
                                   <th scope="col">Agent Id</th>
                                   <th scope="col">client Id</th>
                                   <th scope="col">Description Id</th>
                                   <th scope="col">Date</th>
                                   <th scope="col">Action</th>

                                </tr>
                            </thead>


                          <tbody>
                      
                            <tr>  
                              <td>01</td>  
                              <td>02</td>
                              <td>03</td>
                              <td>04</td>
                              <td>hihihihihi</td>
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