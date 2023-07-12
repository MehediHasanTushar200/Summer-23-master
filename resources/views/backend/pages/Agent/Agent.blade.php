
@extends('master')
@section('content')
 <h1> Agent table</h1>
 <a  type="button" class="btn btn-success" href="">Create</a>


                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Agent Id</th>
                                   <th scope="col">Name</th>
                                   <th scope="col">Email</th>
                                   <th scope="col">phone</th>
                                   <th scope="col">Address</th>
                                </tr>
                            </thead>


                          <tbody>
                      
                            <tr>  
                              <td>01</td>
                              <td>Tushar</td>
                              <td>Tushar@gmail.com</td>
                              <td>uttara,sector-10.</td>
                              
                              <td>
                                <a  type="button" class="btn btn-warning" href="">Show</a>
                                <a  type="button" class="btn btn-success" href="">Edit</a>
                                <a  type="button" class="btn btn-danger" href="">Delete</a>
                              </td>
                            </tr>

                          </tbody>
                        </table>

@endsection