@extends('master')
@section('content')
 <h1> Category table</h1>
 

 <a  type="button" class="btn btn-success" href="{{route('category.create')}}">create</a>


                          <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Sl</th>
                                   <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                     <th scope="col">Image</th>
                                     <th scope="col">Action</th>
                                      </tr>
                            </thead>
                            <tbody>
                      @foreach($category as $cat)
                              <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$cat->name}}</td>
                                <td>{{$cat->description}}</td>
                                <td>{{$cat->status}}</td>
                              
                                <td>
                                  <img style="width: 50px;" src="{{url('/uploads/category/'.$cat->image)}}" alt="">
                                </td>

                                
                               
                                <td>

                                <a  type="button" class="btn btn-warning" href="">Show</a>


                                <a  type="button" class="btn btn-success" href="{{route('category.edit')}}">Edit</a>


                                
                                <a  type="button" class="btn btn-danger" href="">Delete</a>



                                </td>
                              </tr>
                              @endforeach

                             
                              
                            </tbody>
                          </table>
                          {{$category->links()}}

@endsection