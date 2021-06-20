<!DOCTYPE html>
<html lang="en">
  <head>
    <title>L8AC - @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @stack('css')
    <style>
        .app-title {
            padding: 8px 30px;
        }
        .app-title h1 {
            font-size: 22px;
        }

        /*CUSTOM CODE FOR PACE JS*/
        .pace .pace-progress {
            background: #ffca28!important;
        }

        .pace .pace-progress-inner {
            box-shadow: 0 0 10px #ffca28, 0 0 5px #ffca28!important;
        }
        .pace .pace-activity {
            border-top-color: #ffca28;
            border-left-color: #ffca28;
        }
        /*CUSTOM CODE FOR PACE JS*/
    </style>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    @include('layouts.inc.navbar')
    <!-- Sidebar menu-->
    @include('layouts.inc.sidebar')
    <main class="app-content">
        @yield('content')
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('dist/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('dist/js/plugins/pace.min.js') }}"></script>
    @stack('js')
  </body>
</html>
