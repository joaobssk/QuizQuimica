<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KnowQui @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #E0FFFF">
            <div class="container">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
             width="48" height="48"
             viewBox="0 0 252 252"
             style="fill:#000000;"><g transform="translate(-25.2,-25.2) scale(1.2,1.2)"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,252v-252h252v252z" fill="none"></path><g><g id="surface1"><path d="M152.25,110.25h-52.5l-61.91309,74.25879c-0.2666,0.24609 -0.49219,0.53321 -0.73828,0.79981l-1.25098,1.41504h0.10254c-2.74804,3.52734 -4.45019,7.93652 -4.45019,12.77637c0,11.60742 9.39258,21 21,21h147c11.60742,0 21,-9.39258 21,-21c0,-4.67578 -1.5791,-8.94141 -4.16309,-12.42773h0.08203l-0.96386,-1.06641c-0.47168,-0.57422 -0.94336,-1.14844 -1.47656,-1.66114z" fill="#90caf9"></path><path d="M99.75,47.25h52.5v70.44434h-52.5z" fill="#90caf9"></path><path d="M162.75,42c0,5.80371 -4.69629,10.5 -10.5,10.5h-52.5c-5.80371,0 -10.5,-4.69629 -10.5,-10.5c0,-5.80371 4.69629,-10.5 10.5,-10.5h52.5c5.80371,0 10.5,4.69629 10.5,10.5z" fill="#90caf9"></path><path d="M207.90821,193.30664l-0.08203,-0.08203l-0.16406,-0.20508l-0.12305,-0.12304l-0.08203,-0.10254l-0.2666,-0.30761c-0.16406,-0.18457 -0.30762,-0.38965 -0.49219,-0.57422l-0.30762,-0.28711l-0.24609,-0.2666l-34.61719,-41.7334h-91.07519l-34.80176,41.89746l-0.26661,0.2666c-0.20508,0.22559 -0.34863,0.41016 -0.51269,0.59473l-0.20508,0.22559l-0.41016,0.53321c-1.02539,1.33301 -2.25586,3.50683 -2.25586,6.35742c0,5.78321 4.7168,10.5 10.5,10.5h147c5.78321,0 10.5,-4.71679 10.5,-10.5c0,-2.76856 -1.14844,-4.90137 -2.09179,-6.19336z" fill="#f50057"></path><path d="M168,183.75c0,8.69531 -7.05469,15.75 -15.75,15.75c-8.69531,0 -15.75,-7.05469 -15.75,-15.75c0,-8.69531 7.05469,-15.75 15.75,-15.75c8.69531,0 15.75,7.05469 15.75,15.75z" fill="#f48fb1"></path><path d="M126,168c0,5.80371 -4.69629,10.5 -10.5,10.5c-5.80371,0 -10.5,-4.69629 -10.5,-10.5c0,-5.80371 4.69629,-10.5 10.5,-10.5c5.80371,0 10.5,4.69629 10.5,10.5z" fill="#f8bbd0"></path><path d="M141.75,120.75c0,5.80371 -4.69629,10.5 -10.5,10.5c-5.80371,0 -10.5,-4.69629 -10.5,-10.5c0,-5.80371 4.69629,-10.5 10.5,-10.5c5.80371,0 10.5,4.69629 10.5,10.5z" fill="#e3f2fd"></path><path d="M131.25,86.625c0,4.34766 -3.52734,7.875 -7.875,7.875c-4.34766,0 -7.875,-3.52734 -7.875,-7.875c0,-4.34766 3.52734,-7.875 7.875,-7.875c4.34766,0 7.875,3.52734 7.875,7.875z" fill="#e3f2fd"></path></g></g></g></g></svg>
                <a class="navbar-brand" href="{{ url('/') }}">
                    KnowQui
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
