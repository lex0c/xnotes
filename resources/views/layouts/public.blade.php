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
        @yield('content')
	</body>
    <!-- Scripts -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/custom.js"></script>
</html>