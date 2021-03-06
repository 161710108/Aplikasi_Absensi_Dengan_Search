<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>user</title>

    <!-- Fontfaces CSS-->
    <link href="/assets/user/css/font-face.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/assets/user/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/assets/user/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/assets/user/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/assets/user/css/theme.css" rel="stylesheet" media="all">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       @include('partials.mobile')
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include('partials.sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('partials.desktop')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
            @include('layouts.flash')
            @yield('content')
        </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="/assets/user/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/assets/user/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/assets/user/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/assets/user/vendor/slick/slick.min.js">
    </script>
    <script src="/assets/user/vendor/wow/wow.min.js"></script>
    <script src="/assets/user/vendor/animsition/animsition.min.js"></script>
    <script src="/assets/user/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/assets/user/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/assets/user/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/assets/user/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/assets/user/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets/user/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/assets/user/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/assets/user/js/main.js"></script>
     <script src="{{ asset('js/app.js') }}"></script>
     @yield('js')
</body>

</html>
<!-- end document-->
