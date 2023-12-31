
@extends('master')
@section('content')
 <h1> Contact page</h1>
 
           {{-- @if(session()->has('msg'))
                <p class="alert alert-success">{{session()->get('msg')}}</p>
            @endif --}}


                        <table class="table">
                            <thead>
                              <tr>
                                 <th scope="col">Id</th>
                                   <th scope="col">Name</th>
                                   <th scope="col">Email</th>
                                   <th scope="col">Subject</th>
                                   <th scope="col">Message</th>
                                   <th scope="col">Action</th>

                                   
                                </tr>
                            </thead>


                          <tbody>
                      
      
                              @foreach($contacts as $contact)
                              <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->subject}}</td>
                                <td>{{$contact->message}}</td>
                              
                                
                                <td>

                                  <a type="button" class="btn btn-danger" href="{{route('backend.contact.delete',$contact->id)}}">
                                    <i class="fa fa-trash"></i> 
                                  </a>
                                
                                </td>
                                 
                                
                                
                            </tr>
                           @endforeach
                          </tbody>
                        </table>

@endsection