<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('BitTherapy', 'BitTherapy') }}</title>
    <link rel="shortcut icon" type="image/jpg" href="images/pp.jpg">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary text-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('BitTherapy', 'BitTherapy') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="/patients">Connect With a Patient</a> </li>
                        <li class="nav-item">
                             <a class="nav-link" href="/admin/home">Home</a> </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Dr. {{ Auth::user()->name }}
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="page-footer teal pt-4">

        <!-- Footer Links -->
        <div class="container-fluid p-5  bg-primary  text-white">
      
          <!-- Grid row -->
          <div class="row">
      
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">
      
              <!-- Content -->
              <h5 class="text-uppercase">About</h5>
                 
              <h5 class="text-justify">BitTherapy is a website that helps to improve your mental health via our quick online services that can be provided for you to use at your disposal.</h5>
              <p></p>
              <p></p>
              <p></p>
              <h5 class="text-justify">  Address: 2715 Ash Dr.Sean,83475</h5>
              <h5 class="text-justify">  Email: sean.graham@gmail.com</h5>
              <h5 class="text-justify">  Phone:(603)555-0123</h5>
             
            
      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none pb-3">
      
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
      
              <!-- Links -->
              <h5 class="text-uppercase">Links</h5>
              <a class="nav-link" href="/patients">Connect With A Patient</a> </li>
         
            </div>
            <div class="col-md-3 mb-md-0 mb-3">
          
              <!-- Links -->
              <h5 class="text-uppercase">Links</h5>
              <a class="nav-link" href="/admin/home">Home</a>
         
      
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
        </div>
        <!-- Footer Links -->
      
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 bg-primary text-white">© 2022 Copyright:  BitTherapy.com
        </div>
    
      
      </footer>

</body>
</html>
