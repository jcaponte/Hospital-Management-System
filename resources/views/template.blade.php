<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title>@yield('title')</title>
		<meta name="description" content="basic login using smartadmin template">
		<meta name="author" content="Kamere and Grace">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


<!--Basic Styles-->
     <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/all.css')}}">
		<!-- FAVICONS -->
		<link rel="shortcut icon" href="{{asset ('assets/img/favicon/favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{asset ('assets/img/favicon/favicon.ico')}}" type="image/x-icon">

   <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/css/font-awesome.min.css')}}">
			</head>


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



		<!--linking javascript-->
		<script src="{{asset('js/all.js')}}"></script>

		</body>
		</html>
