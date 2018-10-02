<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content='Welcome to Koolriculum'>
        <link rel="canonical" href="http://koolriculum.com/home/" />
   <meta property="og:type" content="website">
    <meta property="og:title" content="Home - KOOLriculum" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="http://koolriculum.com/home/" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="KOOLriculum" />

 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Koolriculum') }} | Home</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!--Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

 <link href="../../public/css/style.css">

    <!-- STYLESHEETS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .nav-item{
                font-size: 1.05rem;
                margin-left:.5em;
            }
        .tablink{
            border:none;
            
        }
        .w3-bar{    
          margin:1em auto 0 auto;

        }
        
         .nav-link{
                border-radius:5px;
                
            }
        .tablink{
            margin: 0 1em;
        }
        .songimg{
            max-width: 200px;
            height: 112px;
            padding:1em;
        }
        .song-item{
            margin-top: 1em;
            margin-bottom: 1em;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/images/logo.png') }} "> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                   @yield('nav')
                    
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<!--a class="toggle fixed-right">Top</a-->
</body>
</html>