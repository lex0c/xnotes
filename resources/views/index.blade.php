<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="XNotes - Simple Application Notes"/>
    <meta name="author" content="Léo B. Castro"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="robots" content="index, follow"/>

    <!-- Facebook -->
    <meta property="og:title" content="XNotes"/>
    <meta property="og:description" content="Simple Application Notes"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content=”“/>
    <meta property="og:url" content=””/>
    <meta property="og:site_name" content="xnotes"/>
    <meta property="og:locale" content="pt_BR"/>

    <!-- Twitter -->
    <meta name="twitter:title" content="XNotes"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="Simple Application Notes"/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/landing-page.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">



    <!--[if lte IE 8]>
        <script src="/js/html5shiv.min.js"></script>
        <script src="/js/respond.min.js"></script>
    <![endif]-->

    <!-- JSON LD -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "CreativeWork",
            "name": "XNotes",
            "about": "XNotes - Simple Application Notes"
        }
        </script>

    <title>{{ $title or 'XNotes - Simple Application Notes' }}</title>

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <b>{{ '< ' . config('app.name', 'XNotes') . ' />' }}</b>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- Authentication Link -->
                @if(Auth::guest())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Cadastrar</a></li>
                </ul>
                @else
                    <ul class="nav navbar-nav navbar-left">
                        <li><a title="Minhas notas" href="{{ route('notes.index') }}">Minhas Notas</a></li>
                        <li><a title="Notas publicas da comunidade" href="#">Notas da Comunidade</a></li>
                        <li><a title="Sobre o XNotes" href="#services">Sobre</a></li>
                    </ul>
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control nav-search" placeholder="Procurar por algo..." size="50"/>
                        </div>
                    </form>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a title="Minhas notas" href="{{ route('notes.index') }}">Minhas Notas</a></li>
                            <li><a title="Editar Perfil" href="{{ route('profile.index') }}">Editar Perfil</a></li>
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
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

<!-- Header -->
<a name="about"></a>
<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1>XNotes</h1>
                    <h3>Um simples aplicativo de notas</h3>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">
                        <li><a title="Nos acompanhe no twitter" href="#" class="btn btn-default btn-lg" role="button" disabled="disabled"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a></li>
                        <li><a title="Colabore com o projeto" href="https://github.com/lleocastro/xnotes" class="btn btn-default btn-lg" role="button"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a></li>
                        <li><a title="Nos conheça no Linkedin" href="#" class="btn btn-default btn-lg" role="button" disabled="disabled"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.intro-header -->

<!-- Page Content -->
<a  name="services"></a>
<div class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Faça anotações simples do que precisa</h2>
                <p class="lead">Com o <b>XNotes</b> você pode personalizar suas notas com cores, marcadores e atribuir um acesso publico para que outras pessoas a vejam ou deixa-las privadas.</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive" src="img/ipad.png" alt="">
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.content-section-a -->

<div class="content-section-b">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Administre suas notas com facilidade</h2>
                <p class="lead">Tenha o controle sobre suas notas com um painel de administração muito simples de ser utilizado. Edite seus marcadores, aplique temas para suas notas e troque mensagens com outros usuarios.</p>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                <img class="img-responsive" src="img/dog.png" alt="">
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.content-section-b -->

<div class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Totalmente portavel! Acesse de qualquer dispositivo</h2>
                <p class="lead">O <b>XNotes</b> é compativel com seus dispositivos com acesso a internet. Acesse pelo <b>smartphone</b>, <b>table</b>, <b>notebook</b>, etc...</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive" src="img/phones.png" alt="">
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.content-section-a -->

<a name="contact"></a>
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Conecte-se ao XNotes:</h2>
            </div>
            <div class="col-lg-6">
                <ul class="list-inline banner-social-buttons">
                    <li><a title="Nos acompanhe no twitter" href="#" class="btn btn-default btn-lg" role="button" disabled="disabled"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a></li>
                    <li><a title="Colabore com o projeto" href="https://github.com/lleocastro/xnotes" class="btn btn-default btn-lg" role="button"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a></li>
                    <li><a title="Nos conheça no Linkedin" href="#" class="btn btn-default btn-lg" role="button" disabled="disabled"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a></li>
                </ul>
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.banner -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright text-muted small">Copyright &copy; XNotes 2017. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
</body>
    <!-- Scripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</html>