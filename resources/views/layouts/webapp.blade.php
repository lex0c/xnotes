<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8"/>
        <meta name="description" content="XNotes - Simple Application Notes"/>
        <meta name="author" content="Léo B. Castro"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="robots" content="noindex, nofollow"/>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css"/>
        <link rel="stylesheet" href="/css/custom.css"/>

        <!--[if lte IE 8]>
            <script src="/js/html5shiv.min.js"></script>
            <script src="/js/respond.min.js"></script>
        <![endif]-->

        <title>{{ $title or 'XNotes - Simple Application Notes' }}</title>

	</head>
	<body>
        
        @yield('content')

	</body>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/custom.js"></script>
</html>