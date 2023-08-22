@extends('frontend.frontend_master')
@section('content')
@if(session()->has('msg'))
  <p class="alert alert-success">{{session()->get('msg')}}</p>
  @endif
  <form action="">
    {{-- action="{{route('save.profile',$customers->id)}}" method="post" --}}
  @csrf
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{url('/uploads/customer/'.auth('customer')->user()->image)}}"><span class="font-weight-bold">{{ auth('customer')->user()->firstname . ' ' . auth('customer')->user()->lastname }}</span><span class="text-black-50">{{auth('customer')->user()->email}} </span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right"> User Profile Settings</h4>
                </div>
                <div class="row mt-2">
                  
                    <div class="col-md-6"><label class="labels">First name</label><input type="text" class="form-control" name="firstname" placeholder="first name" value="{{auth()->guard('customer')->user()->firstname}}"></div>
                    <div class="col-md-6"><label class="labels">Last name</label><input type="text" class="form-control" name="lastname"value="{{auth('customer')->user()->lastname}}" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="phone_number" class="form-control" placeholder="enter phone number" value="{{auth()->guard('customer')->user()->phone_number}}"></div>
                    <div class="col-md-12"><label class="labels"> Present Address</label><input type="text" name="present_address" class="form-control" placeholder="enter  present address " value="{{auth()->guard('customer')->user()->present_address}}"></div>
                    <div class="col-md-12"><label class="labels"> Parmanent Address</label><input type="text" name="permanent_address"class="form-control" placeholder="enter permanent address" value="{{auth()->guard('customer')->user()->permanent_address}}"></div>
                    
                </div>

                <div class="mt-5 text-center">
                    <a class="btn btn-primary profile-button" href="{{route('edit.profile',auth('customer')->user()->id)}}">Edit Profile</a>
                </div>
                
            </div>
        </div>
        
       
    </div>
</div>
</div>
</div>
</form>
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