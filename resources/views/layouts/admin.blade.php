<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/admin/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/assets/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/assets/admin/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="/assets/admin/assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="/assets/admin/assets/css/style.css" rel="stylesheet">
    <link href="/assets/admin/assets/css/style-responsive.css" rel="stylesheet">
   

    <script src="/assets/admin/assets/js/chart-master/Chart.js"></script>
   
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="{{ url('/home') }}" class="logo"><b><font size="6" color="magenta" face="AR DECODE">admin</font></b></a>
            <!--logo end-->
                        <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
               
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="/assets/admin/login.html"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i><font color="black"><b>Logout</b></font></a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
    @include('partials2.sidebar')
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
         <section class="wrapper">
          <br>
          <br>
         @include('layouts.flash')
         @yield('content')

                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/assets/admin/assets/js/jquery.js"></script>
    <script src="/assets/admin/assets/js/jquery-1.8.3.min.js"></script>
    <script src="/assets/admin/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/assets/admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/assets/admin/assets/js/jquery.scrollTo.min.js"></script>
    <script src="/assets/admin/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/assets/admin/assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="/assets/admin/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="/assets/admin/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="/assets/admin/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="/assets/admin/assets/js/sparkline-chart.js"></script>    
	<script src="/assets/admin/assets/js/zabuto_calendar.js"></script>	
	@yield('js')
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: '/assets/admin/assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  
 <script src="{{ asset('js/app.js') }}"></script>
 @yield('js')
  </body>
</html>
