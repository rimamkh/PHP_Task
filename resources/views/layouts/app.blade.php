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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item bottom-line {{ Request::is('product') ? 'active' : '' }}">
                            <a class="nav-link" href="product">Products</a>
                        </li>
                        <li class="nav-item bottom-line {{ Request::is('history') ? 'active' : '' }}">
                            <a class="nav-link" href="history">History</a>
                        </li>
                      
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('msg.Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <!-- Right Side Of Navbar -->
                        <div class="dropdown dr-lang language-selector  mt-2">

                            <a href="#" id="lang-link" class="lang-toggle text-dark " data-toggle="dropdown">

                                <!-- Language switcher function to check local language -->
                                    <small class="text-light">lang</small>
                                @if (App::isLocale('en'))
                                    <img src="images/uk.jpg" style="width:20px;height:20px;" alt="">

                                    <style>
                                        #EN {
                                            background-color: var(--langActive);
                                        }

                                        #eng-lang-label {}

                                    </style>
                                @endif

                                @if (App::isLocale('lt'))
                                    <img src="images/lt.jpg" style="width:20px;height:20px;" alt="">

                                    <style>
                                        #LT {
                                            background-color: var(--langActive);
                                        }

                                        #lt-lang-label {}

                                    </style>
                                @endif

                                <div class="dropdown-toggle text-center" id="lang-dropdown-toggle" style="display: none;
                            ">

                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" id="EN" href="{{ url('locale/en') }}"><img
                                            src="images/uk.jpg" style="width:20px;height:20px;" alt="">
                                        <i class="flag-icon flag-icon-gb"></i>
                                        <span id="eng-lang-label" style="font-size:20px;">🇪🇳</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" id="LT" href="{{ url('locale/lt') }}"><img
                                            src="images/lt.jpg" style="width:20px;height:20px;" alt="">
                                        <i class="flag-icon flag-icon-lt"
                                            style="background-image: url('images/lt.jpg');width:1%;height:1%;"></i>
                                        <span id="lt-lang-label" style="font-size:20px;">🇱🇹 </span>
                                    </a>
                                </li>



                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
