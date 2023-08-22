
@extends('master')
@section('content')
 <h1> Project table</h1>
 <a  type="button" class="btn btn-success" href="{{route('Project.create')}}">Create</a>
 <br>
           @if(session()->has('msg'))
                <p class="alert alert-success">{{session()->get('msg')}}</p>
            @endif


                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Id</th>
                                   <th scope="col">Name</th>
                                   <th scope="col">Status</th>
                                   <th scope="col">Description</th>
                                   <th scope="col">Location</th>
                                   <th scope="col">Employee</th>
                                   <th scope="col">Image</th>
                                   <th scope="col">Start-date</th>
                                   <th scope="col">End-date</th>
                                   <th scope="col">Extend_date</th>
                                   <th scope="col">Action</th>

                                </tr>
                            </thead>


                          <tbody>
                      
      
                              @foreach($projects as $project)
                              <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$project->name}}</td>
                                <td>{{$project->status}}</td>
                                <td>{{$project->description}}</td>
                                <td>{{$project->location}}</td>
                                <td>{{$project->employee}}</td>

                                <td>
                                  <img style="width: 50px;" src="{{url('/uploads/project/'.$project->image)}}" alt="">
                                </td>
                               
                                 <td>{{$project->start_date}}</td>
                                <td>{{$project->end_date}}</td>
                                <td>{{$project->extend_date}}</td>
                              
                                <td>
                                  
                                  <a type="button" class="btn btn-success" href="{{route('project.edit',$project->id)}}">
                                    <i class="fa fa-pencil"></i> <!-- Pencil icon for "Edit" -->
                                  </a>
                                  <a type="button" class="btn btn-danger" href="{{route('project.delete',$project->id)}}">
                                    <i class="fa fa-trash"></i> <!-- Trash icon for "Delete" -->
                                  </a>
                                </td>
                                
                            </tr>
                            @endforeach
                          </tbody>
                        </table>

@endsection