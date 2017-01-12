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

    <!-- Fonts -->
    <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css"/>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/animate.min.css"/>
    <link rel="stylesheet" href="/css/sb-admin.css"/>
    <link rel="stylesheet" href="/css/toastr.min.css"/>

    @stack('css')

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>--}}
    <script src="/js/jquery.min.js"></script>
    <script src="/js/toastr.min.js"></script>
    <script src="/js/custom.js"></script>

    <!--[if lte IE 8]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

    <title>{{ $title or 'Dashboard' }}</title>

</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}">Configurações do Usuario</a>
        </div>

        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            @if(Auth::guest())
                {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li><a href="#">Alert Name <span class="label label-default">Alert Badge</span></a></li>
                        <li><a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a></li>
                        <li><a href="#">Alert Name <span class="label label-success">Alert Badge</span></a></li>
                        <li><a href="#">Alert Name <span class="label label-info">Alert Badge</span></a></li>
                        <li><a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a></li>
                        <li><a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a></li>
                        <li class="divider"></li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="Imagens aleatria sem significado">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Moderador</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Segunda-feira as 4:32 PM</p>
                                        <p>Nova funcionalidade de mensagens implementada.. Uhuuu! </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Ver todas as mensagens</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a title="Minhas notas" href="{{ route('notes.index') }}">Minhas Notas</a></li>
                        <li><a title="Editar Perfil" href="{{ route('profile.index') }}">Editar Perfil</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a title="Mensagens" href="#">Mensagens &nbsp; <span class="badge badge-info">1</span></a></li>
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

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="{{ route('index') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li><a title="Editar Perfil" href="{{ route('profile.index') }}"><i class="fa fa-fw fa-edit"></i> Editar Perfil</a></li>
                <li><a title="Editar Marcadores" href="{{ route('categories.index') }}"><i class="fa fa-fw fa-edit"></i> Editar Marcadores</a></li>
                <li role="separator" class="divider"></li>
                <li><a title="Voltar para Notas" href="{{ route('notes.index') }}"><i class="fa fa-fw fa-list"></i> Voltar para Notas</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    <div id="page-wrapper">
        @yield('content')
    </div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
</body>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/sb-admin.js"></script>

    @stack('chars')

</html>