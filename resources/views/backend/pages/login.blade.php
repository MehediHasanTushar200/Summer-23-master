<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
  body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 80px;
  max-width: 600px;
  height: 415px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

{{-- {{url('uploads/category/login/saimun.jpg')}}" --}}
<body>
 
   
    <div id="login">
       
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">



              {{-- show lohout sucessfully message --}}

                      @if(session()->has('msg'))
                      <p class="alert alert-success"> {{session()->get('msg')}}</p>
                      @endif


                      

                        <form id="login-form" class="form" action="{{route('admin.login.form')}}" method="post">
                           @csrf
                           
                           
                           <img style="width: 70px;  hight:auto"  class="middle"  src="/uploads/login/saimun.jpg" alt="">
                                                 

                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">


                                {{-- <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> --}}
                               
                               

                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>


                            {{-- <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div> --}}



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>