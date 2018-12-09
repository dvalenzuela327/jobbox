<!doctype html>
<html lang="es">
    <head>
        <title>Solarize by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        
        @include('layouts.style')  
    </head>

    <body data-spy="scroll" data-target="#navbar-example">  
        
            @yield('content') 
       
   
        @include('layouts.scrips')
        @stack('scripts')
    </body>
</html>
