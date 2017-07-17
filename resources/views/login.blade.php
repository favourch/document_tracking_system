@extends('layout.main')

@section('content')
<div id="page">		
		<div id="page-title" class="image-bg">
			<div class="container text-center">
				<div class="title-content">
					<h1><img src="{{URL::asset('logo.png')}}"></h1>
					<p>Kogi State Document Tracking System.</p>
				</div>
			</div>
		</div><!--/#page title-->
			
		<div id="login-wrapper" class="padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-5 col-md-offset-1">
						<h3>Log in</h3>
						<form action="{!!URL::route('post-login')!!}" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="form-login-username" >Email</label>
								<input type="text" name="email" class="form-control" placeholder="username" >
							</div>
							<div class="form-group">
								<label for="form-login-password" >Password</label>
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<div class="checkbox">
								<label><input type="checkbox"> Keep me signed in</label>
								<a href="#" class="pull-right">Forgot Password</a>
							</div>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group">
								<button class="btn btn-primary btn-animated btn-block">Sign in</button>
                				
							</div>

							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						</form>
					</div>
					<div class="col-sm-6 col-md-5">
						<h3>Please enter your tracking ID</h3>
						<form method="get" action="#">
							<div class="form-group">
								<label for="form-register-retype" >Tracking ID</label>
								<input type="text" class="form-control" id="trackId" placeholder="Tracking ID">
							</div>
                            
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-animated btn-block">Track File</button>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div><!--/#login-wrapper-->
@stop