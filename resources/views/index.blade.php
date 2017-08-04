<!DOCTYPE html>
<html>

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/lib/css/bootstrap-switch.min.css">

    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.assets') }}/css/themes/flat-green.css">

    <link rel="shortcut icon" href="{{ config('app.assets') }}/img/favicon.ico">
</head>

<body class="flat-green landing-page">
<nav class="navbar navbar-inverse navbar-fixed-top  navbar-affix" role="navigation" data-spy="affix" data-offset-top="60">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
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
<div class="jumbotron app-header">
    <div class="container">
        <h2 class="text-center"><i class="app-logo fa fa-balance-scale fa-5x color-white"></i><div class="color-white">{{ config('app.name', 'Laravel') }}</div></h2>
        <p class="text-center color-white app-description">
            Gerenciamento de processos jurídicos simples, rápido, objetivo e sem burocracia. Seja você um advogado individual ou um escritório de advocacia.
        </p>
    </div>
</div>
<div class="container-fluid app-content-a">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <span class="fa-stack fa-lg fa-5x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-user fa-stack-1x"></i>
                </span>
                <h2 class="count-number">{{ $users }}</h2>
                <p class="text-center app-content-description">Usuários no sistema</p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-md-3 col-sm-6">
                <span class="fa-stack fa-lg fa-5x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-folder fa-stack-1x"></i>
                </span>
                <h2 class="count-number">{{ $folders }}</h2>
                <p class="text-center app-content-description">Pastas cadastradas</p>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-md-3 col-sm-6">
                <span class="fa-stack fa-lg fa-5x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-calendar fa-stack-1x"></i>
                </span>
                <h2 class="count-number">{{ $tasks }}</h2>
                <p class="text-center app-content-description">Prazos realizados</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <span class="fa-stack fa-lg fa-5x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-legal fa-stack-1x"></i>
                </span>
                <h2 class="count-number">{{ $audiences }}</h2>
                <p class="text-center app-content-description">Audiências realizadas</p>
            </div>
            <!-- /.col-lg-4 -->
        </div>
    </div>
</div>
<div class="container-fluid app-content-b feature-1">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6">
            </div>
            <div class="col-md-5 col-sm-6 text-right color-white">
                <h2 class="featurette-heading">Porque o Juris Gear?</h2>
                <p class="lead">O Juris Gear possui um diferencial dos demais produtos do mercado, preço e regra de acesso. Ao criar uma pasta no Juris Gear você pode optar em mantê-la particular ou adicionar convidados para que possam gerenciar a pasta e seu conteúdo. Atendendo um advogado individual ou um escritório de advocacia, ou os dois juntos!</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid app-content-a">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center app-content-header">Planos</h2>
                <p class="text-center app-content-description">Nenhum de nossos planos possuem limites, pode cadastrar e anexar a vontade!</p>
                <p class="text-center app-content-description">Custo extremamente baixo devido a alta qualidade em que foi desenvolvido e a simplicidade de uso, sem deixar de lado a segurança de todos os dados que são inseridos no sistema. Não sendo necessário grandes servidores para atender os usuários.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row no-margin no-gap">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricing-table dark-blue">
                            <div class="pt-header">
                                <div class="plan-pricing">
                                    <div class="pricing">R$15</div>
                                    <div class="pricing-type">por mês/usuário</div>
                                </div>
                            </div>
                            <div class="pt-body">
                                <h4>Mensal</h4>
                                {{--<ul class="plan-detail">--}}
                                    {{--<li>1 Website</li>--}}
                                    {{--<li>100 GB Storage</li>--}}
                                    {{--<li>Unlimited Bandwidth</li>--}}
                                {{--</ul>--}}
                            </div>
                            <div class="pt-footer">
                                <button type="button" class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricing-table green">
                            <div class="pt-header">
                                <div class="plan-pricing">
                                    <div class="pricing">R$80</div>
                                    <div class="pricing-type">por semestre/usuário</div>
                                </div>
                            </div>
                            <div class="pt-body">
                                <h4>Semestral</h4>
                                {{--<ul class="plan-detail">--}}
                                    {{--<li>5 Website</li>--}}
                                    {{--<li>500 GB Storage</li>--}}
                                    {{--<li>Unlimited Bandwidth</li>--}}
                                {{--</ul>--}}
                            </div>
                            <div class="pt-footer">
                                <button type="button" class="btn btn-success">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricing-table  dark-blue">
                            <div class="pt-header">
                                <div class="plan-pricing">
                                    <div class="pricing">R$140</div>
                                    <div class="pricing-type">por ano/usuário</div>
                                </div>
                            </div>
                            <div class="pt-body">
                                <h4>Anual</h4>
                                {{--<ul class="plan-detail">--}}
                                    {{--<li>10 Website</li>--}}
                                    {{--<li>1 TB Storage</li>--}}
                                    {{--<li>Unlimited Bandwidth</li>--}}
                                {{--</ul>--}}
                            </div>
                            <div class="pt-footer">
                                <button type="button" class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid app-content-b contact-us">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-6"><h2 class="color-white contact-us-header">Contato</h2>
                <p class="color-white contact-us-description">Dúvidas ou informações? Entre em contato conosco!</p></div>
            <div class="col-md-6">
                <form>

                    <div class="row">
                        <div class="col-sm-6"><input id="name" name="name" type="text" class="form-control" placeholder="Nome Completo"> </div>
                        <div class="col-sm-6"><input id="email" name="email" type="email" class="form-control" placeholder="Email"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12"><textarea id="message" name="message" class="form-control" placeholder="Mensagem" rows="5"></textarea></div>
                    </div>
                    <div>
                        <button id="contact-submit" type="submit" class="btn btn-success pull-right">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /END THE FEATURETTES -->
<!-- FOOTER -->
<footer class="app-footer">
    <div class="container">
        <p class="text-muted">&copy; <?php echo date('Y'); ?>, Juris Gear.</p>
    </div>
</footer>
<!-- Javascript Libs -->
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/Chart.min.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/select2.full.min.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/ace/ace.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/ace/mode-html.js"></script>
<script type="text/javascript" src="{{ config('app.assets') }}/lib/js/ace/theme-github.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.count-number').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 3000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });
</script>
@include('includes.analytics')
<!-- /.container -->
</body>

</html>