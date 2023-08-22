@extends('frontend.frontend_master')
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="{{URL::asset('frontend/assets/css/login.css')}}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

{{-- {{url('uploads/category/login/saimun.jpg')}}" --}}
<body>
    <div id="login"> 
        <h3 class="text-center text-white pt-5"> </h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                         {{-- show lohout sucessfully message --}}

                      @if(session()->has('msg'))
                      <p class="alert alert-success"> {{session()->get('msg')}}</p>
                      @endif

                        <form id="login-form" class="form" action="{{route('user.doregistration')}}" method="post">
                           @csrf
                           
                           <img style="width: 70px;  hight:auto"  class="middle"  src="/uploads/login/TUSHAR.PNG" alt="">                           
                            <h3 class="text-center text-info">User Registration</h3>
							<div class="form-group">
                                <label for="email" class="text-info">First Name:</label><br>
                                <input type="text" name="firstname" id="username" class="form-control">
                            </div>

							<div class="form-group">
                                <label for="email" class="text-info">Last Name:</label><br>
                                <input type="text" name="lastname" id="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                
                                <input type="submit"  class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
















