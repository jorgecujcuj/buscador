<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .active{
            color: red;
            font-weight:bold;
        }
    </style>
    
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('web/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
</head>
<body>
    
        <!-- Navigation-->
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
                
                <div class="container px-4 px-lg-5">
                    <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 18px;">{{ config('app.name', 'Laravel') }}</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto py-4 py-lg-0">
                                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 {{request()->routeIs('buscas.*') ? 'active' : ''}} " href="{{ url('buscas') }}">{{ __('Diccionario') }}</a></li>
                                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 {{request()->routeIs('nosotros.*') ? 'active' : ''}} " href="{{ url('nosotros') }}">{{ __('Nosotros') }}</a></li>
                                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 {{request()->routeIs('crearContactos.*') ? 'active' : ''}} " href="{{ route('crearContactos.create') }}">{{ __('Contactos') }}</a></li>

                                
                            @if(Auth::check())
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 {{request()->routeIs('datos.*') ? 'active' : ''}} " href="{{ url('datos') }}">{{ __('Datos') }}</a></li>
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 {{request()->routeIs('contactos.*') ? 'active' : ''}} " href="{{ url('contactos') }}">{{ __('Mensajes') }}</a></li>
                            @endif

                            @guest
                                @if (Route::has('login'))
                                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 {{request()->routeIs('login') ? 'active' : ''}} " href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a></li>
                                @endif

                                @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 {{request()->routeIs('register') ? 'active' : ''}} " href="{{ route('register') }}">{{ __('Registrase') }}</a></li>
                                @endif
                            @else
                            <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Cerrar Sesiono') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                </div>
                            </li>      
                            @endguest
                        </ul>
                    </div>
                </div>
        </nav>
    </div> 
        <!-- Masthead-->
        @yield('contentuno')
     
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">

                    <div class="col">
                        @yield('content')
                    </div>

                </div>
            </div>
        </section>

        @yield('contentdos')
        
        <section class="bs-calltoaction bs-calltoaction-default text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Ready to get started?</h2>

                        <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                        
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="{{ url('/') }}">{{ __('Diccionario') }}</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="{{ url('nosotros') }}">{{ __('Nosotros') }}</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="{{ route('contactos.create') }}">{{ __('Contactos') }}</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="{{ route('login') }}">{{ __('Inicciar Sesion') }}</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2021. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="https://www.facebook.com/profile.php?id=100068375786650"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset( 'web/js/scripts.js') }}" defer></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    
</body>
</html>
