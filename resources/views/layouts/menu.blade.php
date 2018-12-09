@extends('layouts.style')
<!-- Header  -->
<div class="wrapper style1">
  <!-- Header -->
  <div id="header">
    <div class="container">
      <!-- Logo -->
      <a href="/home" id="logo"><img src="images/logo100px.png" alt=""></a>
        
      <!-- Nav -->
      <nav id="nav">
        <ul>
          <li class="active"><a href="/home">Inicio</a></li>
          <li class="active"><a href="#">Servicios</a></li>
          <li>
            @guest
              <li>
                <a href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
              </li>
              
              <li>
                @if (Route::has('register'))
                  <a href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                @endif
              </li>

              @else
                  <li class="dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
              </li>
            @endguest
            
          </li>
        
      </nav>
    </div>
</div>
@extends('layouts.scrips')