<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="author" content="Léo B. Castro"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="noindex, nofollow"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css"/>
    <link rel="stylesheet" href="/css/animate.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700"/>
    <link rel="stylesheet" href="/css/toastr.min.css"/>
    <link rel="stylesheet" href="/css/custom.css"/>

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>--}}
    <script src="/js/jquery.min.js"></script>
    <script src="/js/toastr.min.js"></script>

    <!--[if lte IE 8]>
        <script src="/js/html5shiv.min.js"></script>
        <script src="/js/respond.min.js"></script>
    <![endif]-->

    <title>{{ $title or 'Dashboard' }}</title>

</head>
<body>
<div id="app">
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">

                <!-- Brand and toggle get grouped for better mobile display -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image/Name -->
                <a class="navbar-brand" href="{{ route('index') }}">
                    <b>{{ '< ' . 'Dashboard' . ' />' }}</b>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <!-- Left side of navbar -->
                <ul class="nav navbar-nav">
                    @yield('left-nav-buttons')
                </ul>

                <!-- Right side of navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Link -->
                    @if(Auth::guest())
                        {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a title="Minhas notas" href="{{ route('notes.index') }}">Minhas Notas</a></li>
                                <li><a title="Editar Perfil" href="#">Editar Perfil</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a title="Mensagens" href="#">Mensagens &nbsp; <span class="badge badge-info">0</span></a></li>
                                <li><a title="Configurações" href="{{ route('index') }}">Configurações</a></li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    @yield('content')
</div>
</body>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</html>