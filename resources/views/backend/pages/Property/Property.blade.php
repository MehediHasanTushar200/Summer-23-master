
@extends('master')
@section('content')
 <h1> Property table</h1>
 <a  type="button" class="btn btn-success" href="{{route('Property.create')}}">Create</a>


                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col"> Id</th>
                                   <th scope="col">Status</th>
                                   <th scope="col">Description</th>
                                   <th scope="col">Address</th>
                                   <th scope="col">Image</th>
                                   <th scope="col">Price</th>                          
                                   <th scope="col">Action</th>
                                </tr>
                            </thead>
                          <tbody>
                      
                          @foreach($properties as $property)
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$property->status}}</td>
                              <td>{{$property->description}}</td>   
                              <td>{{$property->address}}</td> 
                              <td>
                                <img style="width: 50px;" src="{{url('/uploads/property'.$property->image)}}" alt="">
                              </td>                           
                              <td>{{$property->price}}</td>    

                              <td>                             
                                <a type="button" class="btn btn-warning" href="">
                                  <i class="fa fa-eye"></i> <!-- Eye icon for "Show" -->
                                </a>
                                <a type="button" class="btn btn-success" href="{{route('property.edit',$property->id)}}">
                                  <i class="fa fa-pencil"></i> <!-- Pencil icon for "Edit" -->
                                </a>
                                <a type="button" class="btn btn-danger" href="{{route('property.delete',$property->id)}}"">
                                  <i class="fa fa-trash"></i> <!-- Trash icon for "Delete" -->
                                </a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>

@endsection