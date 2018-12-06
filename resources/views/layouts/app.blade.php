<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JobBox') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-success">
        <a class="navbar-brand" href="/">JobBox</a>
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Inicio</span></a>
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link" href="#">Servicios</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Jobers</a>
                </li>
            </ul>
            
            <ul class="my-0 navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="login">Iniciar sesión</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="register">Registrarse</a>
                        </li>
                    </ul>
            </form>
                  
        </div>
    </nav>
    
    @yield('content')
</body>
</html>
