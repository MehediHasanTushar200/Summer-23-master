
@extends('master')
@section('content')
 <h1> Project table</h1>
 <a  type="button" class="btn btn-success" href="">Create</a>


                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Sl</th>
                                   <th scope="col">Name</th>
                                   <th scope="col">Description</th>
                                   <th scope="col">Location</th>
                                   <th scope="col">Start-date</th>
                                   <th scope="col">End-date</th>
                                   <th scope="col">Action</th>

                                </tr>
                            </thead>


                          <tbody>
                      
                            <tr>  
                              <td>o1</td>  
                              <td>tushar</td>
                              <td>student</td>
                              <td>iubat</td>
                              <td>1/2/3</td>
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