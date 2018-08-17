<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">

    <title>MchReport - @yield('title')</title>
    <!-- title>{{ $page_title or "AdminLTE Dashboard" }}</title -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    {{ Html:: style(('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'))}}
    {{ Html:: style(('assets/bower_components/font-awesome/css/font-awesome.min.css'))}}
    {{ Html:: style(('assets/bower_components/Ionicons/css/ionicons.min.css'))}}
    {{ Html:: style(('assets/bower_components/jvectormap/jquery-jvectormap.css'))}}
    <!-- link href="{{ asset("assets/bower_components/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" /-->
    <!--
    <link href="{{ asset("assets/bower_components/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/bower_components/Ionicons/css/ionicons.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/bower_components/jvectormap/jquery-jvectormap.css/") }}" rel="stylesheet" type="text/css" />
  -->
    <link href="{{ asset("assets/dist/css/AdminLTE.min.css/") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/dist/css/skins/_all-skins.min.css/") }}" rel="stylesheet" type="text/css" />

    <style>
        @import url('https://fonts.googleapis.com/css?family=Prompt:300');
        body {
    /*        margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;*/
            font-family: 'Prompt', sans-serif;
        }

    </style>


</head>
<body class="skin-purple-light sidebar-mini">
<div class="wrapper">

    <!-- Header -->
    @include('layouts.header')

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('layouts.footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("assets/bower_components/jquery/dist/jquery.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("assets/bower_components/bootstrap/dist/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("assets/bower_components/fastclick/lib/fastclick.js") }}" type="text/javascript"></script>
<script src="{{ asset ("assets/dist/js/adminlte.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}" type="text/javascript"></script>
<script src="{{ asset ("assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("assets/bower_components/chart.js/Chart.js") }}" type="text/javascript"></script>
{{-- <script src="{{ asset ("assets/dist/js/pages/dashboard2.js") }}" type="text/javascript"></script> --}}
<script src="{{ asset ("assets/dist/js/demo.js") }}" type="text/javascript"></script>


</body>
</html>
