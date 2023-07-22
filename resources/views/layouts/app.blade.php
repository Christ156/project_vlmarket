<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Christvaldo Blog</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/regular.min.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="">
    <div id="app">
        <nav class="navbar sticky-top navbar-expand-md bg-red-base shadow-sm">
            <div class="container text-light">
                <a class="navbar-brand text-light fw-bold" href="{{ url('/') }}">
                    <img src="https://images.tokopedia.net/img/cache/215-square/shops-1/2018/8/8/34787080/34787080_4a26025d-15e5-41c8-a420-cbd6c548d3f3.jpg" alt="blog_icon" width="40" height="40" class="rounded-circle mx-3">Christvaldo Blog
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto text-light">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="{{ ('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="{{ route('market.index') }}">Market</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="{{ route('profile') }}">Profile</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

        <main class="py-4">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="footer position-relative bottom-0 bg-red-base text-light text-center p-3">
            <div class="row d-flex">
                <div class="col-md-6 col-sm-12">
                    <p><i class="fa fa-copyright"></i><span class="fw-bold"> Copyright 2023</span> | Christvaldo Kurnia Putra</p>
                </div>
                <div class="col-md-6 col-sm-12 justify-content-center my-auto">
                    <a href="https://wa.me/6283844136761"><i class="fa-brands fa-whatsapp fa-lg m-1 fs-2 text-light"></i></a>
                    <a href="https://t.me/Christvaldo"><i class="fa-brands fa-telegram fa-lg m-1 fs-2 text-light"></i></a>
                    <a href="mailto:christvaldo56@gmail.com"><i class="fa fa-envelope fa-lg m-1 fs-2 text-light"></i></a>
                    <a href="https://facebook.com/christvaldo.kurniaputra.3"><i class="fa-brands fa-facebook fa-lg m-1 fs-2 text-light"></i></a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>