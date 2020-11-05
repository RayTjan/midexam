<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ URL::asset('/images/sz_logo.png') }}" type="image/x-icon"/>    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>@yield('judul')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Nunito+Sans:wght@900&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="bootstrap.min.css" />
    <style>
        .externalLogo{
            height: 5vw;
            widows: auto;
        }
        .tableImage{
            width: 10vw;
            height: 10vw;
            object-fit: cover;
        }
        .dataImage{
            width: 5vw;
            height: 5vw;
            object-fit: cover;
        }
        .carouselImage{
            object-fit: cover;
            width: 100%;
            height: 40vw;
        }
        td > * {
            vertical-align : middle;
        }
        .test{
            background-color: blueviolet;
        }
        .fullPagePls{
            margin: 0;
        }
        .left{
            float: left;
            width: 45%;
            margin: 1vw;
            border-radius: 2vw;
        }
        .right{
            float: right;
            width: 45%;
            margin: 1vw;
            border-radius: 2vw;

        }
        .adminChoice{
            padding-left: 15vw;
            padding-right: 15vw;
            margin:0;
        }
        .greenBackground{
            background-color: #44702f;
            color: white;
        }
        .greenButton{
            background-color: #53883a;
            color: white;
        }
        .greenButton:hover{
            background-color: #44702f;
            color: white;
        }
        .carousel-item::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            box-shadow: 0px 0px 70px 80px rgba(0, 0, 0, 0.5) inset;

        }
        .landingImage{
            background-image: url('images/singapore_zoo.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            box-shadow: 0px 0px 70px 500px rgba(0, 0, 0, 0.2) inset;
            height: 40vw;
            padding-top: 20vw;
            font-size: 5vw;
            color: white;
            padding-left: 2vw;
        }
        .landingText{
            text-align: center;
            padding : 4vw;
            background-color: rgba(68,112, 47);
            color: white;
        }
        .bigImage{
            object-fit: cover;
            width: 100%;
            height: 40vw;
        }
        .carousel {
            width: 100%;
            overflow:hidden;
        }
        .carousel-inner>.item>img, .carousel-inner>.item>a>img {
            display: block;
            height: auto;
            max-width: 100%;
            line-height: 1;
            width: 100%;
        }
        .nunito{
            font-family: "Nunito Sans";
            font-weight: bold;
        }
        .greya{
            font-family: "Alegreya";
        }
        .biggerText{
            font-size: 2vw;

        }
        .nunitow{
            font-family: "Nunito Sans";
            font-weight: bold;
        }
        .shade{
            background-color: rgba(68,112, 47, 0.3);
        }
        .aboutZoo{
            display: grid;
            grid-template-columns: 0.5fr 1fr 0.5fr 0.5fr 0.5fr 0.5fr 0.5fr;
            grid-template-rows: minmax(4vw, auto);
            margin-bottom: 4vw;
        }
        .aboutTitle {
            grid-column: 2/5;
            grid-row: 2/4;
            font-size: 4.5vw;
            text-align: left;
            padding-left: 1vw;
            color: #345724;
        }
        .aboutExplain {
            grid-column: 2/7;
            grid-row: 4/6;
            padding-left: 3vw;
            text-align: left;
            font-size: 2vw;
        }
        .aboutImage{
            grid-column: 1/2;
            grid-row: 2/6;
            text-align: left;
            object-fit: cover;
            width: 50vw;

        }
        .logo{
            width: 5vw;
            height: auto;
            background-color: rgba(255, 255, 255, 0.678);
            padding: 0.1vw;
            border-radius: 0.5vw;
        }
        .carouselBorder{
            padding-top: 2vw;
            padding-bottom: 2vw;
            background-color: #44702f;
        }
        .indexData{
            align-items: center;
            text-align: center;
            margin-top: 3vw;
        }
        .indexTable{
            margin-top: 2vw;
            margin-left: auto;
            margin-right: auto;
        }
        .indexTable thead{
            font-family: 'Nunito Sans';
        }
        .indexTable tbody{
            font-family: 'Nunito Sans';
            font-size: 1vw;
        }

        .nav-item:hover{
            background-color: rgba(68,112, 47, 0.8);
        }
        .underL{
            text-decoration: underline;

        }
        footer{
            background-color: #44702f;
            color: white;
            text-align: center;
            bottom: 0;
            padding-top: 2vw;
            padding-left: 30vw;
            padding-right: 30vw;
            font-size: 3vw;
            padding-bottom: 1vw;
        }
        .smolText{
            font-size: 1vw;
        }
        .adminSection{
            padding-top: 1vw;
            padding-bottom: 1vw;
            background-color: rgba(68,112, 47, 0.8);
            text-align: center;
        }
        .adminSection h2{
            font-size: 3vw;
            text-align: center;

        }
        .adminSection h1{
            font-size: 4.5vw;
        }
        .headFlag{
            color: white;
            background-color: #345724;
            padding-left: 1vw;
            padding-top:4vw;
        }
        .headFlag h1{
            font-size: 7vw;
        }
        .adminTable{
            text-align: center;
        }
        .adminTable thead{
            font-family: "Nunito Sans"
        }
        td > * {
            vertical-align : middle;
        }
        .centerAlign{
            text-align: center;
            padding-left:0;
            padding-right: 0;
        }
        .formInput{
            padding:1vw;
        }
        .formInput label{
            font-family: "Nunito Sans";
        }


    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark navbar-expand-md navbar navbar-expand-lg fixed-top shade" >
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo" src="{{asset('images/sz_logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth()
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a class="nav-link active nunitow" href="{{route('animal.index')}}">ANIMAL</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active nunitow" href="{{route('habitat.index')}}">HABITAT</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active nunitow" href="{{route('user.index')}}">CARETAKER</a>
                        </li>
                    </ul>
                    @endauth
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link nunitow active" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link nunitow active" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle nunitow active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ url('/') }}">
                                        <a class="dropdown-item nunitow" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
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

        <main>
            @yield('content')
        </main>
    </div>
    

</body>
</html>
