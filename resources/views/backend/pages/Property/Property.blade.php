
@extends('master')
@section('content')
 <h1> Property table</h1>
 <a  type="button" class="btn btn-success" href="{{route('Property.create')}}">Create</a>


                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Property Id</th>
                                   <th scope="col">Title</th>
                                   <th scope="col">Description</th>
                                   <th scope="col">Address</th>
                                   <th scope="col">Price</th>
                                   <th scope="col">Type Id</th>
                                   <th scope="col">Project Id</th>
                                   <th scope="col">Action</th>

                                </tr>
                            </thead>


                          <tbody>
                      
                            <tr>  
                              <td>01</td>  
                              <td>thid is new Aperatment</td>
                              <td>ihihihi</td>
                              <td>Uttara</td>
                              <td>60,00,000 taka</td>
                              <td>12</td>
                              <td>13</td>

                              <td>
                                <a  type="button" class="btn btn-warning" href="">Show</a>
                                <a  type="button" class="btn btn-success" href="">Edit</a>
                                <a  type="button" class="btn btn-danger" href="">Delete</a>
                              </td>
                            </tr>

                          </tbody>
                        </table>

@endsection