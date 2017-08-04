<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ config('app.assets') }}/img/favicon.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/checkbox3.min.css">

    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/css/themes/flat-green.css">
</head>

<body class="flat-green login-page landing-page">
<nav class="navbar navbar-inverse navbar-fixed-top  navbar-affix" role="navigation" data-spy="affix" data-offset-top="1">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <div class="icon fa fa-balance-scale"></div>
                <div class="title">{{ config('app.name', 'Laravel') }}</div>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse " aria-expanded="true">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/login') }}">Entrar</a></li>
                <li><a href="{{ url('/register') }}">Cadastre-se</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<!-- Javascript Libs -->
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/bootstrap-switch.min.js"></script>

<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/jquery.matchHeight-min.js"></script>


<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/select2.full.min.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/ace/ace.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/ace/mode-html.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/ace/theme-github.js"></script>
<!-- Javascript -->
<script type="text/javascript" src="{{ config('app.assets') }}/js/app2.js"></script>
@include('includes.analytics')
</body>

</html>