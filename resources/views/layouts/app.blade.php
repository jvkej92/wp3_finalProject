<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fa-svg-with-js.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome-all.min.js') }}"></script>

    @yield('scripts')
</head>
<body class="bg-light">
    <div id="app">
        <nav class="navbar navbar-toggleable-md navbar-expand-lg dark navbar navbar-laravel">
            <div class="container-fluid col-10">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/Cannon-River-Winery-Logo-White.png" width="200">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse col-10" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li><a class="nav-link text-light" href="#">Wines</a></li>
                        <li><a class="nav-link text-light" href="#">Pricing</a></li>
                        <li><a class="nav-link text-light" href="#">About</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link text-light" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link text-light" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @role('Admin') {{-- Laravel-permission blade helper --}}
                                    <a href="#"><i class="dropdown-item fa fa-btn fa-unlock"></i>Admin</a>
                                    @endrole
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
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
    </div>
<footer class="sticky-footer bg-dark py-5 mt-4">
    <div class="container-fluid">
        <div class="col-6 m-auto">
            <div class="row justify-content-between">
                <div class="col-3">
                    <h3 class="heading-5 text-muted">Wines</h3>
                    <ul class="navbar-nav mr-auto">
                        <li class="bg-dark"><a class="text-muted sm" href="#">This Months Wines</a></li>
                        <li class="bg-dark"><a class="text-muted sm" href="#">Previous Boxes</a></li>
                    </ul>
                </div>
                <div class="col-3">
                    <h3 class="heading-5 text-muted">About</h3>
                    <ul class="navbar-nav mr-auto">
                            <li class="bg-dark"><a class="text-muted sm" href="#">Minnesota Wines?</a></li>
                            <li class="bg-dark"><a class="text-muted sm" href="#">Our Wines</a></li>
                            <li class="bg-dark"><a class="text-muted sm" href="#">Our Story</a></li>
                            <li class="bg-dark"><a class="text-muted sm" href="#">Faq</a></li>
                        </ul>
                </div>
                <div class="col-3">
                    <h3 class="heading-5 text-muted">Need Help?</h3>
                    <ul class="navbar-nav mr-auto">
                            <li class="bg-dark"><a class="text-muted sm" href="#">Customer Support</a></li>
                            <li class="bg-dark"><a class="text-muted sm" href="#">Gift a Membership</a></li>
                            <li class="bg-dark"><a class="text-muted sm" href="#">Pricing</a></li>
                            <li class="bg-dark"><a class="text-muted sm" href="#">Contact</a></li>
                        </ul>
                </div>
                <div class="col-1">
                    <img src="/img/VintedAndBottled.png" height="140">
                </div>
            </div>
            <div class="row justify-content-center mt-4 pt-4">
                <div class="col-6 text-center text-muted">
                    	&#169; 2018 - All Rights Reserved
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
