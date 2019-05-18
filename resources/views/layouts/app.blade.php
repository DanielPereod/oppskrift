<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}" defer></script>
    <script src="{{ asset('js/validation.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel px-0 pb-4">

                <a class="navbar-brand nav-title" href="{{ url('/') }}">
                    {{ config('app.name', 'OPPSKRIFT') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="{{url('recipe')}}">DESCUBRE</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="{{url('recipe/create')}}">CREA</a>
                        </li class="nav-item">
                        <li class="nav-item mr-4">
                            <a class="nav-link" href="{{url('recipe/categories')}}">CATEGORIAS</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link login" href="{{ route('login') }}">LOGIN</a>
                        </li>
                        @else
                        <li class="nav-item dropdown to-uppercase">
                            <a id="navbarDropdown to-uppercase" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('user.profile', ['id' => auth()->user()->id]) }}">
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="{{ route('user.favoriteRecipes') }}">
                                    Favoritos
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
            @if (session('message'))
            <div class="alert alert-success" role="alert">
                <span>{{ session('message') }}</span>
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                <span>{{ session('error') }}</span>
            </div>
            @endif

            <main class="py-4 allscreen">
                @yield('content')
            </main>
        </div>
    </div>
    <footer class="page-footer font-small blue">

        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a href="{{url('/')}}"> Oppskrift</a>
        </div>
      
      </footer>
</body>

</html>
