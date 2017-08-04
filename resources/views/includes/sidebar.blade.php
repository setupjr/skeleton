<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('dashboard') }}">
                    <div class="icon fa fa-balance-scale"></div>
                    <div class="title">{{ config('app.name', 'Laravel') }}</div>
                </a>
                <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                    <i class="fa fa-times icon"></i>
                </button>
            </div>
            <ul class="nav navbar-nav">
                <li class="{{ (Request::is('dashboard') ? 'active' : '') }}">
                    <a href="{{ route('dashboard') }}">
                        <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="panel panel-default dropdown{{ ($controller == 'ProductController' ? ' active' : '') }}">
                    <a data-toggle="collapse" href="#dropdown-product">
                        <span class="icon fa fa-users"></span><span class="title">Produtos</span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-product" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('products.index') }}">Listar</a></li>
                                <li><a href="{{ route('products.create') }}">Cadastrar Novo</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default dropdown{{ ($controller == 'ClientController' ? ' active' : '') }}">
                    <a data-toggle="collapse" href="#dropdown-client">
                        <span class="icon fa fa-users"></span><span class="title">Clientes</span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-client" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('clients.index') }}">Listar</a></li>
                                <li><a href="{{ route('clients.create') }}">Cadastrar Novo</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>