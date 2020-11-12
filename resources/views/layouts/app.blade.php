<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Materialize Scripts -->
    <link rel = "stylesheet"  href = "https://fonts.googleapis.com/icon?family=Material+Icons">  
    <link rel = "stylesheet"  href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">  
    <script type = "text/javascript"  src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>             
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>   
</head>

<body class="container">
    <div id="app">
        <!-- Navbar -->
        <div class = "row" style = "width:100%;">  
            <div class = "col s12 m12 l12">  
                <nav>  
                    <div class="nav-wrapper light-green">  
                            <ul id="nav-mobile" class="left">  
                                <li><a href="/piezas">Parcial 02</a></li>    
                            </ul>  
                    </div>  
                </nav>  
            </div>  
        </div> 

        <!-- Contenido de la Pagina -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>