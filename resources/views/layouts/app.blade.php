<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Inicio - @yield('title','Index')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
       
        @include('layouts.style')  
    </head>

    <body data-spy="scroll" data-target="#navbar-example">
        <header>
            <!-- header-area start -->
            @include('layouts.menu')
            <!-- header-area end -->
        </header>
  
        
            @yield('content') 
      
   
        <!-- Start Footer bottom Area -->
        @include('layouts.footer')
        @include('layouts.scrips')
        @stack('scripts')
    </body>
</html>
