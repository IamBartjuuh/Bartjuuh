<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bartjuuh.nl') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Styles -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/v4-shims.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark text-white nav-img" data-aos="fade-down" style="z-index: 1020;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="{{ asset('img/weblogo.png') }}" class="resize"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div id="app">
        <body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
            <nav class="navbar navbar-expand-md navbar-dark text-white nav-img" data-aos="fade-down" data-aos-once="true"  style="z-index: 1020;">
                <a class="navbar-brand" href="/"><img src="{{ asset('img/weblogo.png') }}" class="resize"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/projecten" >Projecten</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="portfolio.html" >Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="groow.html" ><svg class="nav-resize mt-2 color" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 227.34 52.99"><title>Groow</title><g><g><path d="M38.25,28.89V.94H28.13V4.88C12.06-7.17-.1,5.38,0,17.82.06,24.44,3.15,31.37,8.88,35c6.91,4.34,14.52,1.28,20.67-2.89C29.31,39.18,24,45,16.69,44.27c-.78-.07-11.46-3-11.06-3.76L1.69,48.19c-.28.55,9.23,3.8,10.2,4a26.33,26.33,0,0,0,11,.4,19.89,19.89,0,0,0,12.77-8.75C38.7,39.06,38.25,34.28,38.25,28.89Zm-19.12-.28c-5,0-9.07-4.52-9.07-10.11S14.12,8.39,19.13,8.39s9.06,4.53,9.06,10.11S24.13,28.61,19.13,28.61Z" transform="translate(0 0)"/><path d="M46.59.94V38.26h10.6V18.5s.56-9.12,11.06-9.4c.09-3.09,0-9.1,0-9.1S60.28.94,57,5.26c0-1.79-.09-4.41-.09-4.41Z" transform="translate(0 0)"/><path d="M71.3,38.26H81c-.07-12.4,18.85-15.1,19.55,0h11.6C109.22,12.36,73.5,12.57,71.3,38.26Z" transform="translate(0 0)"/><path d="M163.22,38.26c-4.13-34.32-50.39-32.35-51.12,0h10c3.57-21.85,27.66-20.35,30.38,0Z" transform="translate(0 0)"/><polygon points="216.52 0.76 209.2 23.82 202.03 0.76 191.2 0.76 183.33 23.82 176.3 0.76 166.03 0.76 177.7 38.26 188.95 38.26 196.69 18.19 203.16 38.26 214.69 38.26 227.34 0.76 216.52 0.76"/></g></g></svg></a>
                        </li>
                            <a class="nav-link" href="ambitieproject.html" >AmbitieProject</a>
                        </li> --}}
                    </ul>
                    @guest
                    @else
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> --}}
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        Dashboard
                                    </a>
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

    <!-- Animation script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- CKeditor -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
