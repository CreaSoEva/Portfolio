<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portfolio') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminconnect.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admincontact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminprojects.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminskills.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminstudies.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style404.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylecontact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleindex.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleprofil.css') }}" rel="stylesheet">
</head>
 <body>
        <main>
            <header>
                <p class="container">
                    <article class="row col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <h1 id="TitreHeader">CREASOEVA</h1>
                    </article>

                    <article class="row col-xs-4 col-sm-4 col-md-4 col-lg-4  float-right">
                                  
                        <!-- Authentication Links -->
                        @guest
                        <ul class="nav navbar-nav navbar-right links">
                            <li><a class="fond" href="{{ route('login') }}">Login</a></li>
                            <li><a class="fond" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="{{ url('/home') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
               
                    </article>
                </p> 
            </header>            

            <p class="container">
                <hr class="style-seven">
            </p>

                
            <p class="container">
                        <!--début du menu de navigation  -->      
                <nav  id="menularge" class="container col-xs-6 col-sm-6 col-md-6 col-lg-6 float-right navstyle">   
                    <a class="fond col-xs-4 col-sm-4 col-md-4 col-lg-4" href="{{ url('/') }}">Home</a>   
                    <a class="fond col-xs-4 col-sm-4 col-md-4 col-lg-4" href="profil.php">About Me</a>
                    <a class="fond col-xs-4 col-sm-4 col-md-4 col-lg-4" href="contact.php">Contact</a> 
                </nav> 

               <!--menu court  -->

                <nav id="menucourt" class="btn-group container-fluid  center block"> 
                    <button class="dropdown-toggle inputbasic" data-toggle="dropdown"><a class="fond" href="{{ url('/') }}">Home</button>
                        <ul class="dropdown-menu entourage">    
                            <li><a class="fond" href="profil.php">About Me</a></li>
                            <li><a class="fond" href="contact.php">Contact</a></li>
                        </ul>
                </nav>
            </p>



        @yield('content')
    </div>

     <footer class="footer container text-center">
    <article class="container">
      <p class="col-xs-4 col-sm-4 col-md-4 col-lg-4">&copy; CréaSoEva 2017</p>
      <a class="col-xs-4 col-sm-4 col-md-4 col-lg-4 fond" href="contact.php">Contact</a>
      <p class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <i class="fab fa-github"></i>
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-twitter"></i>
      </p>
    </article>
  </footer>
  </main>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" ></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    
    
</body>
</html>
