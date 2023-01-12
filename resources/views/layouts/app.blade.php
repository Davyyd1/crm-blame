<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class='elements-block'>
                    <a id='title-nav' class="navbar-brand" href="{{ url('/') }}">
                        CRM-BLAME
                    </a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        {{-- <ul class="navbar-nav me-auto" id='nav-link'>
                            @if (Auth::check() && Auth::user()->role_id == '1')
                            <li><a href="{{ url('admin/proiecte') }}" id='link-proiecte'>Proiecte admin</a></li>
                            @elseif(Auth::check())
                            <li><a href="{{ url('home') }}" id='link-proiecte'>Proiecte user</a></li>
                            @endif
                        </ul> --}}

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}" id='login-auth'>{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}" id="register-auth">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown" id='user-auth'>
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
            </div>
        </nav>

        @if ((Auth::check()))
        <div class='wrapper'>
            <div class="container">
                <ul class="navbar-nav me-auto" id='nav-link'>
                    <div class='nav-link-bar'>
                        @if (Auth::check() && Auth::user()->role_id == '1')
                        <li><a href="{{ url('admin/proiecte') }}" id='link-proiecte'>Admin</a></li>
                        <li><a href="{{ url('home') }}" id='link-proiecte'>Proiecte user</a></li>
                        <li><a href="{{ url('colaboratori') }}" id='link-proiecte'>Colaboratori</a></li>
                        <li><a href="{{ url('statistici') }}" id='link-proiecte'>Statistici</a></li>
                        @elseif(Auth::check())
                        <li><a href="#" id='link-proiecte'>Proiecte user</a></li>
                        <li><a href="{{ url('colaboratori') }}" id='link-proiecte'>Colaboratori</a></li>
                        <li><a href="{{ url('statistici') }}" id='link-proiecte'>Statistici</a></li>
                        <li><a href="#" id='link-proiecte'>free space(fill)</a></li>
                    </div>
                    @endif
                </ul>
            </div>
        </div>
        @endif
        <main class="py-5">
            @yield('content')
        </main>
    </div>
</body>
</html>
