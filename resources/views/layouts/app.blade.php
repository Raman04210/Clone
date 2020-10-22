<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Instagram</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    input[type="search"]{
        text-align:center;
    }
    .dropdown-toggle::after {
    display:none;
    }
    .OR{
    position: absolute;
    top: -10px;
    left: 45%;
    padding: 0 10px;
    background-color: white;
    font-weight: bold;
    color: #918E8E;
    font-size: 13px;
    }
    .navbar-nav .nav-item .nav-link i{
        font-size:22px;
        color: black;
        margin-right:5px;
    }
</style>
</head>
<body>
    <div id="app">        
            <!-- Authentication Links -->
            @guest
                @yield('auth/login')
                @if (Route::has('register'))
                @yield('auth/register')
                @endif
            @else
            <nav class="navbar navbar-expand navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/image/ig-logo.png" width="100px" height="40px">
                    </a>

                    <form class="form-inline mx-auto d-none d-md-inline">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-paper-plane"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-compass"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="/image/profile_image/{{ Auth::user()->image }}" width="25px" height="25px" class="rounded-circle border">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Saved</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <div class="dropdown-divider"></div>
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
                    </ul>
                </div>
            </nav>
            @endguest
                   

        <main class="py-3">
            @yield('content')
        </main>
    </div>
</body>
</html>
