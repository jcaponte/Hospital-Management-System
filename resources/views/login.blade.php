
@extends('template')

@section('title')
login/signin
@stop

@section('content')
<body id="extr-page">
@section('header')
	<!--<span id="logo"></span>-->

	<div id="logo-group">
		<span id="logo"> <img src="{{asset ('assets/img/logo.png')}}" alt="SmartAdmin"> </span>

		<!-- END AJAX-DROPDOWN -->
	</div>

	<span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Need an account?</span>
	<a href="{{url('signup')}}" class="btn btn-danger">Create account</a> </span>

@endsection


<div id="main" role="main">

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1728794024080314',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
	<!-- MAIN CONTENT -->
	<div id="content" class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
				<h1 class="txt-color-red login-header-big">SmartAdmin</h1>
				<div class="hero">

					<div class="pull-left login-desc-box-l">
						<h4 class="paragraph-header">It's Okay to be Smart. Experience the simplicity of SmartAdmin, everywhere you go!</h4>
						<div class="login-app-icons">
							<a href="#" class="btn btn-danger btn-sm">Frontend Template</a>
							<a href="#" class="btn btn-danger btn-sm">Find out more</a>
						</div>
					</div>

					<img src="http://localhost/template/PHP_HTML_Version/img/demo/iphoneview.png" class="pull-right display-image" alt="" style="width:210px">

				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<h5 class="about-heading">About SmartAdmin - Are you up to date?</h5>
						<p>
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
						</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<h5 class="about-heading">Not just your average template!</h5>
						<p>
							Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi voluptatem accusantium!
						</p>
					</div>
				</div>

			</div>
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
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
									    @if($errors->has('email')) <p class="text-danger alert alert-danger" id="email_error">{{$errors->first('email')}}</p> @endif
							</section>

							<section>
								<label class="label">Password</label>
								<label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="password" name="password">
									<b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
									<!--if there is an error with our password it is displayed here-->
									@if($errors->has('password')) <p class="text-danger  alert alert-danger" id="password_error">{{$errors->first('password')}}</p> @endif
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
										<a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
									</li>
								</ul>

			</div>
		</div>
	</div>

</div>

@endsection
