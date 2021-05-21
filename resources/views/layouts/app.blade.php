<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sixerr') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Quick and dirty CSS style for the animated fixed navbar -->
    <style>
        .own-navbar-sticky-top{
            position: fixed;
            z-index: 999;
            opacity:1;
            width: 100%;
            transition: top 0.3s
        }
    </style>

</head>
<body>
    <div id="app">
        <nav id="navbar" class="navbar navbar-expand-md navbar-light bg-white shadow-sm own-navbar-sticky-top">
            <div class="container">
                <!-- TODO Logo which doubles as a home button -->
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('svg/sixerr-logo.svg') }}" width="30px" height="30px"/>
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Back to home -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <!-- The marketplace contains all the user services -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/userServices') }}">Marketplace</a>
                        </li>
                        <!-- The blog contains all the posts -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/posts') }}">Blog</a>
                        </li>
                        <!-- Helpful site for new users and troubleshooting -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <!-- Login or Register -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @if (Auth::user()->is_administrator==1)
                                <!-- Go to the user-manager -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/users') }}">UserManager</a>
                                </li>
                            @endif
                            <!-- Account settings for the currently logged in user -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <!-- Logout of the current account -->
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        <!-- Begin of the contents-->
        <main class="py-4">
            <br><br>
            <br>
            <!-- Returned views will be shown in this section (use the @extend('content') function) -->
            @yield('content')
        </main>
    </div>
</body>
</html>
