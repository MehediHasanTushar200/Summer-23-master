<style>




body{
    background-color: #525252;
}
.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
              <img style="width: 70px;  hight:auto"  class="middle"  src="/uploads/login/TUSHAR.PNG" alt=""class="panel-title" >User Registration Form		    		
			 	</div>
			 			<div class="panel-body">
							
							@if(session()->has('msg'))
							<p class="alert alert-success"> {{session()->get('msg')}}</p>
							@endif
	  
			    		<form role="form" action="{{route('user.doregistration')}}" method="post">
							{{-- @if($errors->any())

							@foreach($errors->all() as $err)
							<p class="alert alert-danger">{{$err}}</p>
							@endforeach 
							 --}}
							@csrf
			    			<div class="row">

			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                          <input type="text" name="firstname" id="firstname" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>

			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="lastname" id="lastname" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">


			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>