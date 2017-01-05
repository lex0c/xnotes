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
        <link rel="stylesheet" href="/css/app.css"/>
        <link rel="stylesheet" href="/css/animate.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700"/>
        <link rel="stylesheet" href="/css/custom.css"/>

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
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
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
                        @if(Auth::guest())
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <b>{{ '< ' . config('app.name', 'XNotes') . ' />' }}</b>
                            </a>
                        @else
                            <a class="navbar-brand" href="{{ url('/notes') }}">
                               <b>{{ '< ' . config('app.name', 'XNotes') . ' />' }}</b>
                            </a>
                        @endif
                        
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        
                        <!-- Left side of navbar -->
                        <ul class="nav navbar-nav">
                            @if(Auth::guest())
                                &nbsp;
                            @else
                                <button type="button" class="btn btn-primary navbar-btn">Nova Nota</button>
                                <button type="button" class="btn btn-success navbar-btn">Nova Lista</button>
                                <button type="button" class="btn btn-default navbar-btn">Nova Categoria</button>
                            @endif
                        </ul>

                        <!-- Right side of navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Link -->
                            @if(Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">Register</a></li>
                            @else
                                <form class="navbar-form navbar-left">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Procurar por alguma nota..." size="50"/>
                                    </div>
                                </form>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="">Meu Perfil</a></li>
                                        <li><a href="">Configurações</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                Sair
                                            </a>
                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
	</body>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/custom.js"></script>
</html>