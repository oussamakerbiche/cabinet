<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cabinet') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/btr.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/js/bootstrap.min.js') }}" rel="stylesheet">
    <script src="{{ asset('bootstrap/jquery.min.js') }}"></script>

</head>
<body background="bg.jpg">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">Rendez-Vous</a>
 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
     @guest
     <a class="navbar-brand" href="{{ route('login') }}">Login</a>
                            
      @else     
                           
 
                                 <a  class="navbar-brand" > {{ Auth::user()->name }}  </a>
                                
                             
                              <a class="navbar-brand" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>                             

                                <a class="navbar-brand" href="{{ route('register') }}">register</a>


     @endguest                   

                                       
                        

  </div>
</nav>

        @yield('content')
    </div>
</body>
</html>
