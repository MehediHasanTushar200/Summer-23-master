
@extends('master')
@section('content')
 <h1> product table</h1>
 

 <a  type="button" class="btn btn-success" href="{{route('product.create')}}">create</a>


                          <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Sl</th>
                                   <th scope="col">Name</th>
                                   <th scope="col">Category</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                     <th scope="col">Image</th>
                                     <th scope="col">Action</th>
                                      </tr>
                            </thead>
                            <tbody>
                      @foreach($product as $product)
                              <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$product->name}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->status}}</td>
                                <td>
                                  <img style="width: 50px;" src="{{url('/uploads/product/'.$product->image)}}" alt="">
                                </td>
                                <td>

                                <a  type="button" class="btn btn-warning" href="">Show</a>


                                <a  type="button" class="btn btn-success" href="">Edit</a>


                                
                                <a  type="button" class="btn btn-danger" href="">Delete</a>



                                </td>
                              </tr>
                              @endforeach

                             
                              
                            </tbody>
                          </table>

@endsection