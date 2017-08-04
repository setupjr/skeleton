<!DOCTYPE html>
<html>

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ config('app.assets') }}/img/favicon.ico">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/font-awesome.min.css">
    {{--<link rel="stylesheet" type="text/css" href="/lib/css/animate.min.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="/lib/css/bootstrap-switch.min.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="/lib/css/checkbox3.min.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="/lib/css/jquery.dataTables.min.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="/lib/css/dataTables.bootstrap.css">--}}
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/jquery-ui.structure.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/jquery-ui.theme.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/select2.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/css/themes/flat-green.css">

    @yield('csshead')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body class="flat-green">
<div class="app-container">
    <div class="row content-container">
        @include('includes.header')

        @include('includes.sidebar')

        @yield('content')
    </div>
    <footer class="app-footer">
        <div class="wrapper">
            <span class="pull-right">1.0 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © {{date('Y')}} Copyright.
        </div>
    </footer>
</div>
        <!-- Javascript Libs -->
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/jquery.min.js"></script>
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/Chart.min.js"></script>
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/bootstrap-switch.min.js"></script>
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/jquery.matchHeight-min.js"></script>
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/select2.full.min.js"></script>
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/i18n/pt.js"></script>
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/ace/ace.js"></script>
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/ace/mode-html.js"></script>
        {{--<script type="text/javascript" src="/lib/js/ace/theme-github.js"></script>--}}
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/jquery-ui.pt-br.js"></script>
        <script type="text/javascript" src="{{ config('app.assets') }}/lib/js/jquery.mask.js"></script>
        <!-- Javascript -->
        <script type="text/javascript" src="{{ config('app.assets') }}/js/app2.js"></script>
        @yield('jsscript')
        @include('includes.analytics')
</body>

</html>
