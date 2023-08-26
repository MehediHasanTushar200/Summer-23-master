
@extends('master')
@section('content')


<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="{{url('/uploads/employee/'.auth('web')->user()->image)}}">
                <span class="font-weight-bold">{{auth('web')->user()->name}}</span>
                <span class="text-black-50">{{auth('web')->user()->email}}</span>
                <span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Employee Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Name</label>
                        <p>{{ auth('web')->user()->name }}</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Mobile Number</label>
                        <p>{{ auth('web')->user()->mobile_number }}</p>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Present address</label>
                        <p>{{ auth('web')->user()->present_address }}</p>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Parmanent address</label>
                        <p>{{ auth('web')->user()->parmanent_address }}</p>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">User Type</label>
                        <p>{{ auth('web')->user()->user_type }}</p>
                    </div>
                </div>
                

                
                <div class="mt-5 text-center">
                    <a class="btn btn-primary profile-button" href="{{route('employee.edite.ptofile')}}"  type="button">Edit Profile</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>
@endsection


<style>
body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}



</style>