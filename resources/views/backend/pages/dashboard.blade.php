@extends('master')
@section('content')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        {{-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> --}}
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Projects🏡</div>
                                   <h6>The Total Project is: </h6> <h1>{{$projects}}</h1>
                                  
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('Project')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Property</div>
                                    <h6>The Total Property is: </h6> <h1></h1>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Booking</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body" class="icon">Report</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <h3>Booking History</h3>
    
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Full name</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Apartment</th>
                                        <th scope="col">Visit date</th>
                                        <th scope="col">Visit time</th>
                                        <th scope="col">Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach($bookings as $booking)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{ $booking->full_name }}</td>
                                        <td>{{ $booking->contact_number }}</td>
                                        <td>{{ $booking->email }}</td>
                                        <td>{{ $booking->address }}</td>
                                        <td>{{ $booking->appartment_name }}</td>
                                        <td>{{ $booking->visit_date }}</td>
                                        <td>{{ $booking->visit_time }}</td>
                                        <td>{{ $booking->additional_comments }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>      
                        </div>
                    </div>           
@endsection