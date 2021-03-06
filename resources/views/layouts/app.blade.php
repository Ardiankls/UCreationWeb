<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UCreation') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
          crossorigin="anonymous"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="overflow-x: hidden">
<div id="app">
    <nav class="navbar shadow col-11 navbar-expand-lg navbar-light bg-light rounded-3"
         style="margin-left: 1em; margin-top: 0.5em;  ">
        <div class="container">
            <a class="navbar-brand" href="
            @auth()
            @if(Auth()->user()->isAdmin()){{ route('admin.creation.index') }}@endif
            @if(Auth()->user()->isLecturer()){{ route('lecturer.creation.index') }}@endif
            @if(Auth()->user()->isStaff()){{ route('staff.creation.index') }}@endif
            @if(Auth()->user()->isStudent()){{ route('student.creation.index') }}@endif

            @endauth
                ">
                {{ config('app.name', 'UCreation') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->

            @include('inc.navbar')

            <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
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
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->email }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                @if(Auth()->user()->isAdmin())<a class="dropdown-item"
                                                                 href="{{ route('admin.user.index',\Illuminate\Support\Facades\Auth::id()) }}"@endif
                                @if(Auth()->user()->isLecturer())<a class="dropdown-item"
                                                                    href="{{ route('lecturer.user.index',\Illuminate\Support\Facades\Auth::id()) }}"@endif
                                @if(Auth()->user()->isStaff())<a class="dropdown-item"
                                                                 href="{{ route('staff.user.index',\Illuminate\Support\Facades\Auth::id()) }}"@endif
                                @if(Auth()->user()->isStudent())<a class="dropdown-item"
                                                                   href="{{ route('student.user.index',\Illuminate\Support\Facades\Auth::id()) }}"
                                                                   @endif
                                                                   >
                                    {{ __('Profile') }}
                                </a>


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
    <div class="container d-block position-absolute" style=" z-index: -1000">
        <img class="img-fluid " src="{{ asset('img/circlelavender3.png') }}">

    </div>
    <div class="container d-block position-absolute "
         style=" z-index: -1001; left: 1200px; bottom: 500px; max-width: 100%;">
        <img class="img-fluid  " src="{{ asset('img/circlepink.png') }}">
    </div>
    <main class="py-4" style="z-index: 100">


        @yield('content')
    </main>
</div>
</body>
</html>
