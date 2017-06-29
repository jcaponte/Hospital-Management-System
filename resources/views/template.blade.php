<!DOCTYPE html>
<html lang="en-us" id="extr-page">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title>@yield('title')</title>
		<meta name="description" content="basic login using smartadmin template">
		<meta name="author" content="Kamere and Grace">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{asset ('assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{asset ('assets/css/font-awesome.min.css')}}">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset ('assets/css/smartadmin-production-plugins.min.css')}}">

		<link rel="stylesheet" type="text/css" media="screen" href="{{asset ('assets/css/smartadmin-production.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{asset ('assets/css/smartadmin-skins.min.css')}}">
      
		<!-- SmartAdmin RTL Support is under construction-->
		<link rel="stylesheet" type="text/css" media="screen" href="{{asset ('assets/css/smartadmin-rtl.min.css')}}">

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.-->
		<link rel="stylesheet" type="text/css" media="screen" href="{{asset ('assets/css/your_style.css')}}">


		<!-- FAVICONS -->
		<link rel="shortcut icon" href="{{asset ('assets/img/favicon/favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{asset ('assets/img/favicon/favicon.ico')}}" type="image/x-icon">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

			</head>
	<body class="pace-done">

	@yield ('content')

		
	
	
	
<!-- PAGE FOOTER -->
<div class="page-footer">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
			<span class="txt-color-white">project 1 <span class="hidden-xs"> Kamere and Grace</span> © 2017</span>
		</div>
	</div>
</div>

<!-- END PAGE FOOTER -->	



	<!--================================================== -->

		<!-- These scripts will be located in Header So we can add scripts inside body (used in class.datatables.php) -->
		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="<?/*php echo ASSETS_URL;*/ ?>/js/libs/jquery-2.0.2.min.js"><\/script>');
			}
		</script>

		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="<?/*php echo ASSETS_URL;*/ ?>/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script> -->
		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->


		<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script-->
	
		<script src="{{asset ('assets/js/libs/jquery-2.1.1.min.js')}}"></script>;
			

		<!--script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script-->

	    <script src="{{asset ('assets/js/libs/jquery-ui-1.10.3.min.js')}}"></script>
		

	<!-- BOOTSTRAP JS -->
		<script src="{{asset ('assets/js/bootstrap/bootstrap.min.js')}}"></script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="{{asset ('assets/js/app.config.seed.js')}}"></script>

	
		<!--[if IE 8]>
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
		<![endif]-->

		<!-- MAIN APP JS FILE -->
		<script src="{{asset ('assets/js/app.seed.js')}}"></script>

<script type="text/javascript">
	

	
		// Validation
		$("#login-form").on('submit', function(ev){
			ev.preventDefault();
			var xEmail = $('#email').val();
			var xPass = $('#password').val();

			if(xEmail.lenght<0){
				$("#error_email">.text('sorry email required'));
			}
			if{
				$("#error_password">.text('sorry password required'));
			}

			





		});
	
</script>



		</body>
		</html>