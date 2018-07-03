<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'TECLINE') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="app">
    <nav class="navbar fixed-top navbar-expand-md navbar-light navbar-laravel background-color-black">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/image/logo.png" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li><a class="nav-link @if(Request::segment(1) == 'sobre-nos') active @endif" href="/sobre-nos">SOBRE NÓS</a></li>
                    <li><a class="nav-link @if(Request::segment(1) == 'galerias') active @endif" href="/galerias">GALERIA</a></li>
                    <li><a class="nav-link @if(Request::segment(1) == 'catalogo') active @endif" href="/catalogo">CATÁLOGO</a></li>
                    <li><a class="nav-link @if(Request::segment(1) == 'produtos') active @endif" href="/produtos">PRODUTOS</a></li>
                    <li><a class="nav-link @if(Request::segment(1) == 'onde-encontrar') active @endif" href="/onde-encontrar">ONDE ENCONTRAR</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CONTATO
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/fale-conosco">Fale conosco</a>
                            <a class="dropdown-item" href="/trabalhe-conosco">Trabalhe conosco</a>
                        </div>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-lock"></i> &nbsp RESTRITO
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" target="_blank" href="http://consultasweb.promob.com/Authentication/Index?ReturnUrl=%2f">Sistema de consulta</a>
                                <a class="dropdown-item" target="_blank" href="http://pedidos.teclinemoveis.com.br:8080/pedidos3/login.asp">Sistema de pedidos</a>
                            </div>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="footer border-top d-print-none background-color-black color-white">
        <div class="container text-center redes-sociais">
            <span class="float-left">
                <img src="/image/logo.png" width="180">
            </span>
            <span class="float-right">
                <strong class="mr-5"><i class="fas fa-phone"></i> Fone. 54 2621.6886 - <i class="fas fa-globe"></i> teclinemoveis@teclinemoveis.com.br</strong>
                <a href="https://www.facebook.com/teclinemoveis/" target="_blank">
                    <i class="fab fa-facebook-square fa-lg ml-1"></i>
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <i class="fab fa-instagram fa-lg ml-1"></i>
                </a>
                <a href="https://www.youtube.com/" target="_blank">
                    <i class="fab fa-youtube fa-lg ml-1"></i>
                </a>
            </span>
        </div>
    </footer>
    @component('layouts.default.scripts')
        @yield('scripts')
    @endcomponent
</body>
</html>