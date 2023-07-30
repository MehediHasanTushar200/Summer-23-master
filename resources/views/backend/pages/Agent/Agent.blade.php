
@extends('master')
@section('content')
 <h1> Agent table</h1>
 <a  type="button" class="btn btn-success" href="{{route('Agent.add')}}">Create</a>


                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Agent Id</th>
                                   <th scope="col">Name</th>
                                   <th scope="col">Email</th>
                                   <th scope="col">phone</th>
                                   <th scope="col">Address</th>
                                   <th scope="col">Image</th>
                                   <th scope="col">Action</th>

                                </tr>
                            </thead>


                          <tbody>
                      
                            @foreach($agents as $age)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$age->name}}</td>
                              <td>{{$age->email}}</td>
                              <td>{{$age->phone}}</td>
                              <td>{{$age->address}}</td>
                              <td>
                                <img style="width: 50px;" src="{{url('/uploads/agent/'.$age->image)}}" alt="">
                              </td>
                              
                              <td>
                                <a type="button" class="btn btn-warning" href="">
                                  <i class="fa fa-eye"></i> <!-- Eye icon for "Show" -->
                                </a>
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