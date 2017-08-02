

@extends('template')




@section('content')
    <body class="fixed-header fixed-navigation fixed-ribbon">

        <!-- POSSIBLE CLASSES: minified, fixed-ribbon, fixed-header, fixed-width
             You can also add different skin classes such as "smart-skin-1", "smart-skin-2" etc...-->
                        <!-- HEADER -->
                <header id="header">
                    <div id="logo-group">

                        <!-- PLACE YOUR LOGO HERE -->
                        <span id="logo"> <img src="http://localhost/seed/img/logo.png" alt="SmartAdmin"> </span>
                        <!-- END LOGO PLACEHOLDER -->

                        <!-- Note: The activity badge color changes when clicked and resets the number to 0
                        Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
                        <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

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

                    <!-- projects dropdown -->
                    <div class="project-context hidden-xs">

                        <span class="label">Projects:</span>
                        <span id="project-selector" class="popover-trigger-element dropdown-toggle" data-toggle="dropdown">Recent projects <i class="fa fa-angle-down"></i></span>

                        <!-- Suggestion: populate this list with fetch and push technique -->
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Notes on pipeline upgradee</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Assesment Report for merchant account</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
                            </li>
                        </ul>
                        <!-- end dropdown-menu-->

                    </div>
                    <!-- end projects dropdown -->

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
                                    <img src="http://localhost/seed/img/avatars/sunny.png" alt="John Doe" class="online" />
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

                </header>
                <!-- END HEADER -->

                <!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
                Note: These tiles are completely responsive,
                you can add as many as you like
                -->
                <div id="shortcut">
                    <ul>
                        <li>
                            <a href="http://localhost/seed" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
                        </li>
                    </ul>
                </div>
                <!-- END SHORTCUT AREA -->

                <!-- Left panel : Navigation area -->
        <!-- Note: This width of the aside area can be adjusted through LESS variables -->
        <aside id="left-panel">

            <!-- User info -->
            <div class="login-info">
                <span> <!-- User image size is adjusted inside CSS, it should stay as is --> 
                    
                    <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                        <img src="http://localhost/seed/img/avatars/sunny.png" alt="me" class="online" /> 
                        <span>
                            john.doe 
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a> 
                    
                </span>
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
                <ul>


               <li class="active"><a href="#" title="Home">
                    <i class="fa fa-lg fa-fw fa-home"></i>
                    <span class="menu-item-parent">Home </span>
                    
                <b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a><ul style="display: none;"><li class=""><a href="#" title="Analytics Dashboard">
                    
                    Doctor  
                    
                </a></li><li><a href="#" title="Social Wall">
                    
                    Nurse
                    
                </a></li></ul></li>

               <li class=""><a href="#" title="Patients">
                    <i class="fa fa-lg fa-fw fa-user"></i>
                    <span class="menu-item-parent">Patients </span>
                    
                <b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a><ul style="display: none;"><li class=""><a href="#" title="Analytics Dashboard">
                    
                Patient 1
                    
                </a></li><li><a href="#" title="Social Wall">
                    
                    Patient 2
                    
                </a></li></ul></li>


               <li class=""><a href="#" title="Inventory">
                    <i class="fa fa-lg fa-fw fa-list-alt"></i>
                    <span class="menu-item-parent">Inventory </span>
                    
                <b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a><ul style="display: none;"><li class=""><a href="#" title="Analytics Dashboard">
                    
                Inventory 1
                    
                </a></li><li><a href="#" title="Social Wall">
                    
                    Inventory 2
                    
                </a></li></ul></li>



               <li class=""><a href="#" title="Order">
                    <i class="fa fa-lg fa-fw fa-gift"></i>
                    <span class="menu-item-parent">Order </span>
                    
                <b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a><ul style="display: none;"><li class=""><a href="#" title="Analytics Dashboard">
                    
            Order 1
                    
                </a></li><li><a href="#" title="Social Wall">
                    Order 2
                    
                </a></li></ul></li>


<li class=""><a
                href="#"
                
                title="Setting"
                ><i class="fa fa-lg fa-fw fa-cog"></i>
                    
                    Setting
                    
                </a><ul><li><a
                href="#"
                
                title="Item #2"
                >
                    <i class="fa fa-lg fa-fw fa-folder-open"></i>
                    Setting 1
                    
                </a><ul><li><a
                href="#"
                
                title="Sub #2.1"
                >
                    <i class="fa fa-lg fa-fw fa-folder-open"></i>
                    Setting 1.1
                    
                </a><ul><li><a
                href="#"
                
                title="Item #2.1.1"
                >
                    <i class="fa fa-lg fa-fw fa-file-text"></i>
                    setting 1.2
                    
                </a></li></ul></li></ul></li><li><a
                href="#"
                
                title="Item #3"
                >
                    <i class="fa fa-lg fa-fw fa-folder-open"></i>
                    Setting 2 
                    
                </a><ul><li><a
                href="#"
                
                title="Sub #3.1"
                >
                    <i class="fa fa-lg fa-fw fa-folder-open"></i>
                    Setting 2.1 
                    
                </a><ul><li><a
                href="#"
                
                title="File"
                >
                    <i class="fa fa-lg fa-fw fa-file-text"></i>
                    Setting 2.2 
                    
                </a></li></ul></li></ul></li>
                </ul></li>


                               <li class=""><a href="#" title="Reports">
                    <i class="fa fa-lg fa-fw fa-book"></i>
                    <span class="menu-item-parent">Reports </span>
                    
                <b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a><ul style="display: none;"><li class=""><a href="#" title="Analytics Dashboard">
                    Report 1
                </a></li><li><a href="#" title="Social Wall">
                    Report 2
                </a></li></ul></li></ul>


            </nav>
            <span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

        </aside>
        <!-- END NAVIGATION --><!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
        
    <div id="ribbon">


        <!-- breadcrumb -->
  <ol class="breadcrumb">
            <li><a href="http://localhost/template/PHP_HTML_Version">Home</a></li><li>Profile</li>      </ol>
        

    </div>
    <!-- END RIBBON -->
    <!-- MAIN CONTENT -->
    <div id="content">





<div class="row panel panel-default" id='panel-main'>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 panel-body ">
            <ul id="sparks" class="pull-left">
                    <li class="sparks-info">Filter By:

<label class="select" >
                                            

                                                <select class="input-sm" onchange="filterContent();" id="selected">
                                                    <option value="chart1" >Patient Appointment</option>
                                                    <option value="chart2" >Patient Enrollment</option>
                                                    <option value="chart3" >Drug Expiring</option>
                                                                                                        
                                                </select> </label>
            </li>

                            <li class="sparks-info">
DATE: From: <input type="text" id="from"> &nbsp;&nbsp;&nbsp;To:&nbsp;&nbsp; <input type="text" id="to" disabled="disabled">
            </li>

                    <li class="sparks-info">
                                        
            At
<label class="select">
                                                <select class="input-sm">
                                                    <option value="0" >Pharmacy</option>
                                                    <option value="1" >CCC</option>
                                                    <option value="2">Mainstone</option>
                                                                                                    
                                                </select> <i></i> </label>
            </li>
            </ul>
        </div>
        </div>

<!-- widget grid -->
                <section id="widget-grid" class="">

                    <!-- row -->
                    <div class="row" id="test">
                        
                 



                        <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="chart1"   style="max-height: 500px;">
                            <!-- Widget ID (each widget will need unique ID)-->
                            <div class="jarviswidget jarviswidget-color-blue" id="wid-id-1" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" >
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
            
                        


                                                                <header>

                                    <h2>Weekly Summary Of Patient Appointment</h2>              
                                                                </header>
                                <div>
                                    
                                    <!-- widget edit box -->
                                    <div class="jarviswidget-editbox">
                                        <!-- This area used as dropdown edit box -->
                                        <input class="form-control" type="text">    
                                    </div>
                                    <!-- end widget edit box -->
                            
                                    <!-- widget content -->
                                    <div class="widget-body" style="max-height: 350px; overflow: scroll;">
                                        
                                        <!-- this is what the user will see -->
                                        <canvas id="pAppointments" height="800" width="800"></canvas>

                                    </div>
                                    <!-- end widget content -->
                                    
                                </div>
                                <!-- end widget div -->
                                
                            </div>
                            </article>
                            <!-- end widget -->


<!-- NEW WIDGET START -->
                        <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="chart2"  style="max-height: 500px">
                            
                            <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget jarviswidget-color-blue" id="wid-id-2" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-colorbutton="false"  data-widget-deletebutton="false">
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
                                    <div class="widget-body" style="max-height: 350px; overflow: scroll;">
                                        
                                        <!-- this is what the user will see -->
                                        <canvas id="pEnrollment" height="800" width="800"></canvas>

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
                        <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="chart3"  style="max-height: 500px">
                            <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget jarviswidget-color-blue" id="wid-id-3" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-colorbutton="false"  data-widget-deletebutton="false" >
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
                                    <div class="widget-body" style="max-height: 350px; overflow: scroll;">
                                        
                                        <!-- this is what the user will see -->
                                        <canvas id="dExpiring" height="500" width="800"></canvas>

                                    </div>
                                    <!-- end widget content -->
                                    
                                </div>
                                <!-- end widget div -->
                                
                            </div>
                            </article>
                            <!-- end widget -->


<!-- NEW WIDGET START -->


                    </div>


                    <!-- end row -->
                </section>














    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- ==========================CONTENT ENDS HERE ========================== -->
@endsection