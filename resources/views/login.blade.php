
@extends('template')

@section('title')
login/signin
@stop

@section('content')
<div class="container">
<div class="row" id="login_body">
<div class="col-xm-12 col-sm-12 col-md-5 col-lg-4 col-md-offset-5 col-lg-offset-4">
				<div class="well no-padding">
					<form action="loginFlash" id="login-form" class="smart-form client-form" method="POST">
						<header>
							<h3 class="text-center text-info">Sign In</h3>
						</header>
{{ csrf_field() }}





						<fieldset>
					<!--if both email and password are filled we return success message-->
							@if(Session::has('success'))<p class="alert alert-success">{{Session::get('success')}}</p>
@endif
							<section>
								<label class="label">E-mail</label>
								<label class="input"> <i class="icon-append fa fa-user"></i>
									<input type="email" name="email">
									<b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
										<!--if there is an error with our email it is displayed here-->
									    @if($errors->has('email')) <p class="text-danger">{{$errors->first('email')}}</p> @endif
							</section>

							<section>
								<label class="label">Password</label>
								<label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="password" name="password">
									<b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label> 
									<!--if there is an error with our password it is displayed here-->   
									@if($errors->has('password')) <p class="text-danger">{{$errors->first('password')}}</p> @endif
								<div class="note">
									<a href="#">Forgot password?</a> || 
									<a href="#">Create Account?</a>
								</div>
							</section>

							<section>
								<label class="checkbox">
									<input type="checkbox" name="remember" checked="">
									<i></i>Stay signed in</label>
							</section>
						</fieldset>
						<footer>
							<button type="submit" class="btn btn-primary btn-lg">
								Sign in
							</button>
						</footer>
					</form>

				</div>
				
				<h5 class="text-center"> - Or sign in using -</h5>
													
								<ul class="list-inline text-center">
									<li>
										<a href="#" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a href="#" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a href="#" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>
				
			
		</div>
		</div>
		</div>
	
@stop


