
@extends('master')
@section('content')
 <h1> Property_type table</h1>
 <a  type="button" class="btn btn-success" href="">Create</a>


                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Id</th>
                                   <th scope="col"> Type Name</th>
                                   <th scope="col">Action</th>

                                </tr>
                            </thead>


                          <tbody>
                      
                            <tr>  
                              <td>o1</td>  
                              <td>Apeartment</td>
                              <td>
                                <a  type="button" class="btn btn-warning" href="">Show</a>
                                <a  type="button" class="btn btn-success" href="">Edit</a>
                                <a  type="button" class="btn btn-danger" href="">Delete</a>
                              </td>
                            </tr>

                          </tbody>
                        </table>

@endsection