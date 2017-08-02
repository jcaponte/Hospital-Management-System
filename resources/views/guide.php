@extends('template')

@section('title')
profile
@endsection

@section('content')
<body class="">
@section('header')
					<div id="logo-group">

						<!-- PLACE YOUR LOGO HERE -->
						<span id="logo"> </span>
						<!-- END LOGO PLACEHOLDER -->



						<!-- Note: The activity badge color changes when clicked and resets the number to 0
						Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
						<span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge bg-color-red bounceIn animated"> 21 </b> </span>

						<!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
						<div class="ajax-dropdown">

							<!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
							<div class="btn-group btn-group-justified" data-toggle="buttons">
								<label class="btn btn-default">
									<input type="radio" name="activity" id="http://localhost/seed/ajax/notify/mail.php">
									Msgs (14) </label>
								<label class="btn btn-default">
									<input type="radio" name="activity" id="http://localhost/seed/ajax/notify/notifications.php">
									notify (3) </label>
								<label class="btn btn-default">
									<input type="radio" name="activity" id="http://localhost/seed/ajax/notify/tasks.php">
									Tasks (4) </label>
							</div>

							<!-- notification content -->
							<div class="ajax-notifications custom-scroll">

								<div class="alert alert-transparent">
									<h4>Click a button to show messages here</h4>
									This blank page message helps protect your privacy, or you can show the first message here automatically.
								</div>

								<i class="fa fa-lock fa-4x fa-border"></i>

							</div>
							<!-- end notification content -->

							<!-- footer: refresh area -->
							<span> Last updated on: 12/12/2013 9:43AM
								<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
									<i class="fa fa-refresh"></i>
								</button> </span>
							<!-- end footer -->

						</div>
						<!-- END AJAX-DROPDOWN -->
					</div>

			

					<!-- pulled right: nav area -->
					<div class="pull-right">

						<!-- collapse menu button -->
						<div id="hide-menu" class="btn-header pull-right">
							<span> <a href="javascript:void(0);" title="Collapse Menu" data-action="toggleMenu"><i class="fa fa-reorder"></i></a> </span>
						</div>
						<!-- end collapse menu -->

						<!-- #MOBILE -->
						<!-- Top menu profile link : this shows only when top menu is active -->
						<ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
							<li class="">
								<a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
									<img src="http://localhost/seed/img/avatars/sunny.png" alt="John Doe" class="online">
								</a>
								<ul class="dropdown-menu pull-right">
									<li>
										<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="profile.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="login.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
									</li>
								</ul>
							</li>
						</ul>

						<!-- logout button -->
						<div id="logout" class="btn-header transparent pull-right">
							<span> <a href="http://localhost/seed/login.php" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
						</div>
						<!-- end logout button -->

						<!-- search mobile button (this is hidden till mobile view port) -->
						<div id="search-mobile" class="btn-header transparent pull-right">
							<span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
						</div>
						<!-- end search mobile button -->

						<!-- input: search field -->
						<form action="http://localhost/seed/search.php" class="header-search pull-right">
							<input type="text" name="param" placeholder="Find reports and more" id="search-fld">
							<button type="submit">
								<i class="fa fa-search"></i>
							</button>
							<a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
						</form>
						<!-- end input: search field -->

						<!-- fullscreen button -->
						<div id="fullscreen" class="btn-header transparent pull-right">
							<span> <a href="javascript:void(0);" title="Full Screen" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i></a> </span>
						</div>
						<!-- end fullscreen button -->

						<!-- multiple lang dropdown : find all flags in the flags page -->

						<ul class="header-dropdown-list hidden-xs">
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="http://localhost/seed/img/blank.gif" class="flag flag-us" alt="United States"> <span> English (US) </span> <i class="fa fa-angle-down"></i> </a>
								<ul class="dropdown-menu pull-right">
									<li class="active">
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-us" alt="United States"> English (US)</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-fr" alt="France"> Français</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-es" alt="Spanish"> Español</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-de" alt="German"> Deutsch</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-jp" alt="Japan"> 日本語</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-cn" alt="China"> 中文</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-it" alt="Italy"> Italiano</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-pt" alt="Portugal"> Portugal</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-ru" alt="Russia"> Русский язык</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-kr" alt="Korea"> 한국어</a>
									</li>
								</ul>
							</li>
						</ul>

						<!-- end multiple lang -->

					</div>
					<!-- end pulled right: nav area -->

				@endsection
				<aside id="left-panel" class="info">

			<!-- User info -->
			<div class="login-info">
				
				<h6>Useful Links </h6>

				
			</div>
			<!-- end user info -->

			<!-- NAVIGATION : This navigation is also responsive

			To make this navigation dynamic please make sure to link the node
			(the reference to the nav > ul) after page load. Or the navigation
			will not initialize.
			-->
			<nav>
				<!-- NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional hre="" links. See documentation for details.
				-->
				<ul style="color:#486d7b"><li class="active"><a href="#" title="Blank">
					
					<i class="fa fa-home"></i>
					<span class="menu-item-parent">HOME</span>

				</a></li>
                  		<li><a href="#" title="Patients">	
                  		<i class="fa fa-user"></i>	
					<span class="menu-item-parent">PATIENTS</span>

				</a></li>
					<li><a href="#" title="Inventory">
					<i class="fa fa-list-alt"></i>
					<span class="menu-item-parent">INVENTORY </span>

				</a></li>
					<li><a href="#" title="Order">
					<i class="fa fa-gift"></i>
					<span class="menu-item-parent">ORDERS</span>

				</a></li>
				<li><a href="#" title="Setting">
				<i class="fa fa-cog"></i>
					<span class="menu-item-parent">SETTINGS </span>

				</a></li>
					<li><a href="#" title="reports">
					<i class="fa fa-book"></i>
					<span class="menu-item-parent">REPORTS</span>

				</a></li>
					<li><a href="#" title="Profile">
					<i class="fa fa-user"></i>
					<span class="menu-item-parent">PROFILE </span>

				</a></li>




				</ul>
			</nav>
			<span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

		</aside>

		<!-- MAIN PANEL -->
<div id="main" role="main">

	<div id="content">

<!-- row -->

				
				<!--
					The ID "widget-grid" will start to initialize all widgets below 
					You do not need to use widgets if you dont want to. Simply remove 
					the <section></section> and you can use wells or panels instead 
					-->
				
				<!-- widget grid -->
				<section id="widget-grid" class="">

					<!-- row -->
					<div class="row">
						

						<!-- NEW WIDGET START -->



						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="col-md-12" style="background-color:#496f90; color:#fff;">
<p>Weekly Summary Of Patient Appointments</p>
<span><input type="text" name="param" placeholder="03-Jul-2017" class="input-sm" id="search-fld">To<input type="text" name="param" placeholder="08-Jul-2017" id="search-fld"> <a class="btn btn-warning" href="javascript:void(0);"> Get</a><a class="btn btn-success" href="javascript:void(0);">Large</a></span></div>
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget col-md-12" id="wid-id-2" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">	
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<!-- this is what the user will see -->
										<canvas id="pAppointments" height="180"></canvas>

									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							</article>
							<!-- end widget -->


<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-2" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>

									<h2>Weekly Summary Of Patient Enrollment</h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">	
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<!-- this is what the user will see -->
										<canvas id="pEnrollment" height="180"></canvas>

									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->
</article>
						
					</div>

					<!-- end row -->



					<!-- row -->
					<div class="row">
						

						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="col-md-12" style="background-color:#496f90; color:#fff;">
<p>Summary of Drugs Expiring</p>
<p>in 

<label class="select" style="color:#333;">
	<select class="input-sm">
													<option value="0">1 Month</option>
													<option value="1">2 Months</option>
													<option value="2">3 Months</option>
																									</select> <i></i> </label>



at

											<label class="select" style="color:#333;">
												<select class="input-sm">
													<option value="0">Pharmacy</option>
													<option value="1">Clinic</option>
													
																									</select> <i></i> </label>
									
 <a class="btn btn-warning" href="javascript:void(0);"> Get </a>&nbsp;<a class="btn btn-success" href="javascript:void(0);">Large</a></p>
</div>
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget col-md-12" id="wid-id-2" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>

									<h2>Summary of Drugs Expiring</h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">	
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<!-- this is what the user will see -->
										<canvas id="dExpiring" height="180"></canvas>

									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							</article>
							<!-- end widget -->


<!-- NEW WIDGET START -->
					
						<div class="col-md-6"> 
<div class="col-md-12" style="background-color:#496f90; color:#fff;">
<p>Stocks About To Run Out at</p>

<p>

<label class="select" style="color:#333;">
												<select class="input-sm">
													<option value="0">Pharmacy</option>
													<option value="1">Clinic</option>
													
																									</select> <i></i> </label>

 <a class="btn btn-warning" href="javascript:void(0);"> Get </a>&nbsp;<a class="btn btn-success" href="javascript:void(0);">Large</a></p>
</div><div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div></div></div>


					</div>

					<!-- end row -->
				</section>
				<!-- end widget grid -->


			

</div>
</div>
<!-- END MAIN PANEL -->

@endsection








@extends('template')

@section('title')
profile
@endsection

@section('content')
<body class="">
@section('header')
					<div id="logo-group">

						<!-- PLACE YOUR LOGO HERE -->
						<span id="logo"> </span>
						<!-- END LOGO PLACEHOLDER -->



						<!-- Note: The activity badge color changes when clicked and resets the number to 0
						Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
						<span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge bg-color-red bounceIn animated"> 21 </b> </span>

						<!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
						<div class="ajax-dropdown">

							<!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
							<div class="btn-group btn-group-justified" data-toggle="buttons">
								<label class="btn btn-default">
									<input type="radio" name="activity" id="http://localhost/seed/ajax/notify/mail.php">
									Msgs (14) </label>
								<label class="btn btn-default">
									<input type="radio" name="activity" id="http://localhost/seed/ajax/notify/notifications.php">
									notify (3) </label>
								<label class="btn btn-default">
									<input type="radio" name="activity" id="http://localhost/seed/ajax/notify/tasks.php">
									Tasks (4) </label>
							</div>

							<!-- notification content -->
							<div class="ajax-notifications custom-scroll">

								<div class="alert alert-transparent">
									<h4>Click a button to show messages here</h4>
									This blank page message helps protect your privacy, or you can show the first message here automatically.
								</div>

								<i class="fa fa-lock fa-4x fa-border"></i>

							</div>
							<!-- end notification content -->

							<!-- footer: refresh area -->
							<span> Last updated on: 12/12/2013 9:43AM
								<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
									<i class="fa fa-refresh"></i>
								</button> </span>
							<!-- end footer -->

						</div>
						<!-- END AJAX-DROPDOWN -->
					</div>

			

					<!-- pulled right: nav area -->
					<div class="pull-right">

						<!-- collapse menu button -->
						<div id="hide-menu" class="btn-header pull-right">
							<span> <a href="javascript:void(0);" title="Collapse Menu" data-action="toggleMenu"><i class="fa fa-reorder"></i></a> </span>
						</div>
						<!-- end collapse menu -->

						<!-- #MOBILE -->
						<!-- Top menu profile link : this shows only when top menu is active -->
						<ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
							<li class="">
								<a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
									<img src="http://localhost/seed/img/avatars/sunny.png" alt="John Doe" class="online">
								</a>
								<ul class="dropdown-menu pull-right">
									<li>
										<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="profile.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="login.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
									</li>
								</ul>
							</li>
						</ul>

						<!-- logout button -->
						<div id="logout" class="btn-header transparent pull-right">
							<span> <a href="http://localhost/seed/login.php" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
						</div>
						<!-- end logout button -->

						<!-- search mobile button (this is hidden till mobile view port) -->
						<div id="search-mobile" class="btn-header transparent pull-right">
							<span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
						</div>
						<!-- end search mobile button -->

						<!-- input: search field -->
						<form action="http://localhost/seed/search.php" class="header-search pull-right">
							<input type="text" name="param" placeholder="Find reports and more" id="search-fld">
							<button type="submit">
								<i class="fa fa-search"></i>
							</button>
							<a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
						</form>
						<!-- end input: search field -->

						<!-- fullscreen button -->
						<div id="fullscreen" class="btn-header transparent pull-right">
							<span> <a href="javascript:void(0);" title="Full Screen" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i></a> </span>
						</div>
						<!-- end fullscreen button -->

						<!-- multiple lang dropdown : find all flags in the flags page -->

						<ul class="header-dropdown-list hidden-xs">
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="http://localhost/seed/img/blank.gif" class="flag flag-us" alt="United States"> <span> English (US) </span> <i class="fa fa-angle-down"></i> </a>
								<ul class="dropdown-menu pull-right">
									<li class="active">
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-us" alt="United States"> English (US)</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-fr" alt="France"> Français</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-es" alt="Spanish"> Español</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-de" alt="German"> Deutsch</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-jp" alt="Japan"> 日本語</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-cn" alt="China"> 中文</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-it" alt="Italy"> Italiano</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-pt" alt="Portugal"> Portugal</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-ru" alt="Russia"> Русский язык</a>
									</li>
									<li>
										<a href="javascript:void(0);"><img src="http://localhost/seed/img/blank.gif" class="flag flag-kr" alt="Korea"> 한국어</a>
									</li>
								</ul>
							</li>
						</ul>

						<!-- end multiple lang -->

					</div>
					<!-- end pulled right: nav area -->

				@endsection
				<aside id="left-panel" class="info">

			<!-- User info -->
			<div class="login-info">
				
				<h6>Useful Links </h6>

				
			</div>
			<!-- end user info -->

			<!-- NAVIGATION : This navigation is also responsive

			To make this navigation dynamic please make sure to link the node
			(the reference to the nav > ul) after page load. Or the navigation
			will not initialize.
			-->
			<nav>
				<!-- NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional hre="" links. See documentation for details.
				-->
				<ul style="color:#486d7b"><li class="active"><a href="#" title="Blank">
					
					<i class="fa fa-home"></i>
					<span class="menu-item-parent">HOME</span>

				</a></li>
                  		<li><a href="#" title="Patients">	
                  		<i class="fa fa-user"></i>	
					<span class="menu-item-parent">PATIENTS</span>

				</a></li>
					<li><a href="#" title="Inventory">
					<i class="fa fa-list-alt"></i>
					<span class="menu-item-parent">INVENTORY </span>

				</a></li>
					<li><a href="#" title="Order">
					<i class="fa fa-gift"></i>
					<span class="menu-item-parent">ORDERS</span>

				</a></li>
				<li><a href="#" title="Setting">
				<i class="fa fa-cog"></i>
					<span class="menu-item-parent">SETTINGS </span>

				</a></li>
					<li><a href="#" title="reports">
					<i class="fa fa-book"></i>
					<span class="menu-item-parent">REPORTS</span>

				</a></li>
					<li><a href="#" title="Profile">
					<i class="fa fa-user"></i>
					<span class="menu-item-parent">PROFILE </span>

				</a></li>




				</ul>
			</nav>
			<span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

		</aside>

		<!-- MAIN PANEL -->
<div id="main" role="main">

	<div id="content">

<!-- row -->

				
				<!--
					The ID "widget-grid" will start to initialize all widgets below 
					You do not need to use widgets if you dont want to. Simply remove 
					the <section></section> and you can use wells or panels instead 
					-->
				
				<!-- widget grid -->
				<section id="widget-grid" class="">

					<!-- row -->
					<div class="row">
						

						<!-- NEW WIDGET START -->



						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="col-md-12" style="background-color:#496f90; color:#fff;">
<p>Weekly Summary Of Patient Appointments</p>
<span><input type="text" name="param" placeholder="03-Jul-2017" class="input-sm" id="search-fld">To<input type="text" name="param" placeholder="08-Jul-2017" id="search-fld"> <a class="btn btn-warning" href="javascript:void(0);"> Get</a><a class="btn btn-success" href="javascript:void(0);">Large</a></span></div>
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget col-md-12" id="wid-id-2" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">	
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<!-- this is what the user will see -->
										<canvas id="pAppointments" height="180"></canvas>

									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							</article>
							<!-- end widget -->


<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-2" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>

									<h2>Weekly Summary Of Patient Enrollment</h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">	
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<!-- this is what the user will see -->
										<canvas id="pEnrollment" height="180"></canvas>

									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->
</article>
						
					</div>

					<!-- end row -->



					<!-- row -->
					<div class="row">
						

						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<div class="col-md-12" style="background-color:#496f90; color:#fff;">
<p>Summary of Drugs Expiring</p>
<p>in 

<label class="select" style="color:#333;">
	<select class="input-sm">
													<option value="0">1 Month</option>
													<option value="1">2 Months</option>
													<option value="2">3 Months</option>
																									</select> <i></i> </label>



at

											<label class="select" style="color:#333;">
												<select class="input-sm">
													<option value="0">Pharmacy</option>
													<option value="1">Clinic</option>
													
																									</select> <i></i> </label>
									
 <a class="btn btn-warning" href="javascript:void(0);"> Get </a>&nbsp;<a class="btn btn-success" href="javascript:void(0);">Large</a></p>
</div>
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget col-md-12" id="wid-id-2" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>

									<h2>Summary of Drugs Expiring</h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">	
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<!-- this is what the user will see -->
										<canvas id="dExpiring" height="180"></canvas>

									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							</article>
							<!-- end widget -->


<!-- NEW WIDGET START -->
					
						<div class="col-md-6"> 
<div class="col-md-12" style="background-color:#496f90; color:#fff;">
<p>Stocks About To Run Out at</p>

<p>

<label class="select" style="color:#333;">
												<select class="input-sm">
													<option value="0">Pharmacy</option>
													<option value="1">Clinic</option>
													
																									</select> <i></i> </label>

 <a class="btn btn-warning" href="javascript:void(0);"> Get </a>&nbsp;<a class="btn btn-success" href="javascript:void(0);">Large</a></p>
</div><div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div></div></div>


					</div>

					<!-- end row -->
				</section>
				<!-- end widget grid -->


			

</div>
</div>
<!-- END MAIN PANEL -->

@endsection




