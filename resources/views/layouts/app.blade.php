<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/resepku.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
    </head>
    <body class="font-sans ">
        <div>
             <!--Navbar-->
            <header  >
                <nav class = "navbar  shadow-lg navbar-expand-lg navbar-light header-resep"  >
                    <div class = "container">
                        <a class="navbar-brand" href="" id = "brand">Resepku</a>
                        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation" >
                            <span class="navbar-toggler-icon" ></span>
                        </button>  
                        <div  class = "collapse navbar-collapse justify-content-end" id="myNav">
                            <ul class = "navbar-nav " >
                                <li class="nav-item"><a class="nav-link" href= "{{route('dashboard')}}" id="menu">Beranda</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('tulis')}}" id="menu">Tulis Resep</a></li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();" id="menu">
                                        {{ __('Log Out') }}</a>
                                    </form> 
                                </li>   
                        
                            </ul>
                        </div>
                    </div>
                </nav>
            </header> <br><br>

            <!-- Page Content -->
            <main class="my-4">
                {{ $slot }}
            </main>

            <footer > 
                <h5 class="text-center py-4">Made by Farzana Hadifa</h5>
            </footer>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>

        </body>
</html>
