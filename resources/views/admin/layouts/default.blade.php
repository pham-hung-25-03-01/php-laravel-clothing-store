<!DOCTYPE html>
<html lang="en" dir="ltr" class="mdl-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Andshop - Admin Dashboard HTML Template.">

    <title>@yield('title') - AndShop</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{asset('admin/css/materialdesignicons.min.css')}}" rel="stylesheet">

    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('admin/plugins/simplebar/simplebar.css')}}" rel="stylesheet">

    @yield('header_optional')
    <!-- custom css -->
    <link id="style.css" href="{{asset('admin/css/style.css')}}" rel="stylesheet">

    <!-- FAVICON -->
    <link href="https://andit.co/projects/html/andshop/andshop-dashboard/assets/img/favicon.png" rel="shortcut icon">

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

    <!--  WRAPPER  -->
    <div class="wrapper">

        <!-- LEFT MAIN SIDEBAR -->
        @include('admin.includes.left_main_sidebar')
        <!--  PAGE WRAPPER -->
        <div class="ec-page-wrapper">

            <!-- Header -->
            @include('admin.includes.header')

            <!-- CONTENT WRAPPER -->
            @yield('content')

            <!-- Footer -->
            @include('admin.includes.footer')

        </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    <!-- Common Javascript -->
    <script src="{{asset('admin/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/plugins/tags-input/bootstrap-tagsinput.js')}}"></script>
    <script src="{{asset('admin/plugins/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('admin/plugins/slick/slick.min.js')}}"></script>

    <!-- Chart -->
    <script src="{{asset('admin/plugins/charts/Chart.min.js')}}"></script>
    <script src="{{asset('admin/js/chart.js')}}"></script>

    <!-- Google map chart -->
    <script src="{{asset('admin/plugins/charts/google-map-loader.js')}}"></script>
    <script src="{{asset('admin/plugins/charts/google-map.js')}}"></script>

    <!-- Date Range Picker -->
    <script src="{{asset('admin/plugins/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('admin/js/date-range.js')}}"></script>

    <!-- Optional Section -->
    @yield('footer_optional')
    <!-- custom js -->
    <script src="{{asset('admin/js/custom.js')}}"></script>
</body>

</html>