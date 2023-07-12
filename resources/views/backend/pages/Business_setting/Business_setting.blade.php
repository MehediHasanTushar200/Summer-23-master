
@extends('master')
@section('content')
 <h1> Business setting table</h1>
 <a  type="button" class="btn btn-success" href="">Create</a>


                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Sl</th>
                                   <th scope="col">Name</th>
                                   <th scope="col">status</th>
                                   <th scope="col">Action</th>
                                </tr>
                            </thead>


                          <tbody>
                      
                            <tr>  
                              <td>01</td>
                              <td>name</td>
                              <td>active</td>
                              <td>
                                <a  type="button" class="btn btn-warning" href="">Show</a>
                                <a  type="button" class="btn btn-success" href="">Edit</a>
                                <a  type="button" class="btn btn-danger" href="">Delete</a>
                              </td>
                            </tr>

                          </tbody>
                        </table>

@endsection