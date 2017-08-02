<!DOCTYPE html>
<html lang="en-us" class="" >
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

        <title> profile</title>
        <meta name="description" content="this is a sampled UI design for medical management software">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Basic Styles -->
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/template/PHP_HTML_Version/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/template/PHP_HTML_Version/css/font-awesome.min.css">

        <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/template/PHP_HTML_Version/css/smartadmin-production-plugins.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/template/PHP_HTML_Version/css/smartadmin-production.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/template/PHP_HTML_Version/css/smartadmin-skins.min.css">

        <!-- SmartAdmin RTL Support is under construction-->
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/template/PHP_HTML_Version/css/smartadmin-rtl.min.css">

        <!-- We recommend you use "your_style.css" to override SmartAdmin
             specific styles this will also ensure you retrain your customization with each SmartAdmin update.
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/template/PHP_HTML_Version/css/your_style.css"> -->

        

        <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/template/PHP_HTML_Version/css/demo.min.css">

        <!-- FAVICONS -->
        <link rel="shortcut icon" href="http://localhost/template/PHP_HTML_Version/img/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="http://localhost/template/PHP_HTML_Version/img/favicon/favicon.ico" type="image/x-icon">

        <!-- GOOGLE FONT -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
       


   
        <link rel="stylesheet" href="{{asset('assets/css/your_style.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css">
        

        <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            if (!window.jQuery) {
                document.write('<script src="http://localhost/template/PHP_HTML_Version/js/libs/jquery-2.1.1.min.js"><\/script>');
            }
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
            if (!window.jQuery.ui) {
                document.write('<script src="http://localhost/template/PHP_HTML_Version/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
            }
        </script>


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



    <!--linking all javascript-->
    
        <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
        <script data-pace-options='{ "restartOnRequestAfter": true }' src="http://localhost/template/PHP_HTML_Version/js/plugin/pace/pace.min.js"></script>

        <!-- These scripts will be located in Header So we can add scripts inside body (used in class.datatables.php) -->
        <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script>
            if (!window.jQuery) {
                document.write('<script src="http://localhost/template/PHP_HTML_Version/js/libs/jquery-2.0.2.min.js"><\/script>');
            }
        </script>

        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
            if (!window.jQuery.ui) {
                document.write('<script src="http://localhost/template/PHP_HTML_Version/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
            }
        </script> -->

        <!-- IMPORTANT: APP CONFIG -->
        <script src="http://localhost/template/PHP_HTML_Version/js/app.config.js"></script>

        <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
        <script src="http://localhost/template/PHP_HTML_Version/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

        <!-- BOOTSTRAP JS -->
        <script src="http://localhost/template/PHP_HTML_Version/js/bootstrap/bootstrap.min.js"></script>

        <!-- CUSTOM NOTIFICATION -->
        <script src="http://localhost/template/PHP_HTML_Version/js/notification/SmartNotification.min.js"></script>

        <!-- JARVIS WIDGETS -->
        <script src="http://localhost/template/PHP_HTML_Version/js/smartwidgets/jarvis.widget.min.js"></script>

        <!-- EASY PIE CHARTS -->
        <script src="http://localhost/template/PHP_HTML_Version/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

        <!-- SPARKLINES -->
        <script src="http://localhost/template/PHP_HTML_Version/js/plugin/sparkline/jquery.sparkline.min.js"></script>

        <!-- JQUERY VALIDATE -->
        <script src="http://localhost/template/PHP_HTML_Version/js/plugin/jquery-validate/jquery.validate.min.js"></script>

        <!-- JQUERY MASKED INPUT -->
        <script src="http://localhost/template/PHP_HTML_Version/js/plugin/masked-input/jquery.maskedinput.min.js"></script>

        <!-- JQUERY SELECT2 INPUT -->
        <script src="http://localhost/template/PHP_HTML_Version/js/plugin/select2/select2.min.js"></script>

        <!-- JQUERY UI + Bootstrap Slider -->
        <script src="http://localhost/template/PHP_HTML_Version/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

        <!-- browser msie issue fix -->
        <script src="http://localhost/template/PHP_HTML_Version/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

        <!-- FastClick: For mobile devices -->
        <script src="http://localhost/template/PHP_HTML_Version/js/plugin/fastclick/fastclick.min.js"></script>

        <!--[if IE 8]>
            <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
        <![endif]-->

        <!-- Demo purpose only -->
        <script src="http://localhost/template/PHP_HTML_Version/js/demo.min.js"></script>

        <!-- MAIN APP JS FILE -->
        <script src="http://localhost/template/PHP_HTML_Version/js/app.min.js"></script>        

        <!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
        <!-- Voice command : plugin -->
        <script src="http://localhost/template/PHP_HTML_Version/js/speech/voicecommand.min.js"></script>    

        <!-- SmartChat UI : plugin -->
        <script src="http://localhost/template/PHP_HTML_Version/js/smart-chat-ui/smart.chat.ui.min.js"></script>
        <script src="http://localhost/template/PHP_HTML_Version/js/smart-chat-ui/smart.chat.manager.min.js"></script>


        <!-- JARVIS WIDGETS -->
        <script src="http://localhost/template/PHP_HTML_Version/js/smartwidgets/jarvis.widget.min.js"></script>
        


<script src="{{asset('js/Chart.min.js')}}"></script>
        <script type="text/javascript">
            // DO NOT REMOVE : GLOBAL FUNCTIONS!
            $(document).ready(function() {
                pageSetUp();
                 $( function() {
    $("#to").datepicker();
    $("#from").datepicker({
        onSelect:function(){
            var date=$(this).datepicker('getDate');
            $("#to").datepicker("setDate",new Date(date.getTime()));
            $("#to").datepicker("setDate", "+30d");
            
        }
});

  } );


});

</script>


<script type="text/javascript">





function filterContent(){
   var user = document.getElementById("selected").value;
    //alert(user);

    if(user=="chart1") {
             $("#chart2").hide();
     $("#chart3").hide();
     $("#chart1").show();
   
    } else if (user=="chart2") {
     $("#chart1").hide();
     $("#chart2").show();
     $("#chart3").hide();
    } else if (user=="chart3") {
     $("#chart1").hide();
     $("#chart2").hide();
     $("#chart3").show();
    }




}









     // reference: http://www.chartjs.org/docs/
var ctx = document.getElementById("pAppointments");
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [{
            label: 'Expected',
            backgroundColor:["#ff6387","#ff6387","#ff6387","#ff6387","#ff6387","#ff6387"],
            data: [15, 14, 35, 15, 47, 3]
        },{
            label: 'Visited',
            backgroundColor: ["#36a2eb","#36a2eb","#36a2eb","#36a2eb","#36a2eb","#36a2eb"],
            data: [2, 2, 2, 2, 2, 2]
    }]},
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});


/*****************this is for appointment ************************/
var pE = document.getElementById("pEnrollment");
var myChart = new Chart(pE, {
       type: 'horizontalBar',
    data: {
        labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [{
            label: 'Male Adult',
            data: [1, 4, 3, 2, 4, 1],
            backgroundColor: ["#36a2eb","#36a2eb","#36a2eb","#36a2eb","#36a2eb","#36a2eb"]
        },{
            label: 'Female Adult',
            data: [1, 0.2, 0, 1, 2, 0],
            backgroundColor: ["ff6384","ff6384","ff6384","ff6384","ff6384","ff6384"]            
        },


{
            label: 'Male Child',
            data: [0.4, 2, 0.5, 3, 0, 1],
            backgroundColor: ["#4caf50","#4caf50","#4caf50","#4caf50","#4caf50","#4caf50"]
          
        },

{
            label: 'Female Child',
            data: [0.2, 0.6, 2, 0.1, 3, 1],
            backgroundColor: ["#ff6384","#ff6384","#ff6384","#ff6384","#ff6384","#ff6384","#ff6384"]
        } ]
    },

    options: {
        scales: {
            yAxes: [{
                ticks: {
                    min:1
                }
            }]
        }
    }

});


















/*-----------------row 2--------*/

     // reference: http://www.chartjs.org/docs/
var dE = document.getElementById("dExpiring");
var myChart = new Chart(dE, {
    type: 'horizontalBar',
    data: {
        labels: ["CETERIZINE 10-MG","TDF/3TC/EFV","XXZY 15-MG"],
        datasets: [{
            label: 'Stock',
            data: [40, 15, 10,],
            backgroundColor: ["#ff6384","#ff6384","#ff6384"]
           
        },{
            label: 'Expiry',
            data: [5, 5, 5],
            backgroundColor: ["#3ca2eb","#3ca2eb","#3ca2eb"]
            
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});



/*--===============================Date Picker================-->*/



/*<!--auto zooming content---->*/









         
  


</script>



        </body>
        </html>
