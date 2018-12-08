<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Inicio - @yield('title','Index')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        
        @include('layouts.style')
    <!-- Favicons -->
  
    </head>

    <body data-spy="scroll" data-target="#navbar-example">
        <div id="preloader"></div>
  
        <div class="row">
            @yield('content') 
        </div>
   
        <!-- Start Footer bottom Area -->

        @include('layouts.scrips')
        @stack('scripts')
        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->

    </body>
</html>