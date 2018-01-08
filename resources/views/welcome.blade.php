<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Portfolio</title>

        <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
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

                    <article class="row col-xs-4 col-sm-4 col-md-4 col-lg-4 float-right navstyle">
                        @if (Route::has('login'))
                            <ul class="nav navbar-nav navbar-right links">
                                @auth
                                    <li><a class="fond" href="{{ url('/home') }}">Home</a></li>
                            @else
                                    <li><a class="fond" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="fond" href="{{ route('register') }}">Register</a></li>
                                @endauth
                            </ul>
                         @endif          
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

    <!-- Afficher une photo plus grande que la miniature presentee -->
<!-- <p>
    Vous souhaitez voir l'image dans sa taille d'origine ? Cliquez dessus !<br />
    <a href="img/montagne.jpg"><img src="img/montagne_mini.jpg" alt="Photo de montagne" title="Cliquez pour agrandir" /></a>
</p> -->


  <!-- début de la serie projets  -->

    <section id="firstligne" class="container col-xs-10 col-sm-10 col-md-10 col-lg-10">    
            <ul id="hexGrid">          
                <li class="hex">
                    <div class="hexIn">
                        <a class="hexLink" href="#">
                            <img src="https://farm9.staticflickr.com/8461/8048823381_0fbc2d8efb.jpg" alt="" />
                            <h1>This is a title</h1>
                            <p>Some sample text about the article this hexagon leads to</p>
                        </a>
                    </div>
                </li>

                <li class="hex">
                    <div class="hexIn">
                        <a class="hexLink" href="#">
                            <img src="https://farm5.staticflickr.com/4144/5053682635_b348b24698.jpg" alt="" />
                            <h1>This is a title</h1>
                            <p>Some sample text about the article this hexagon leads to</p>
                        </a>
                    </div>
                </li>

                <li class="hex">
              <div class="hexIn">
                  <a class="hexLink" href="#">
                    <img src="https://farm9.staticflickr.com/8461/8048823381_0fbc2d8efb.jpg" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                  </a>
              </div>
            </li>
            </ul>
        </section>

        <!--  début ligne 2  -->
        <section id="twoligne" class="container col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <ul id="hexGrid">          
            <li class="hex">
              <div class="hexIn">
                  <a class="hexLink" href="#">
                    <img src="https://farm9.staticflickr.com/8461/8048823381_0fbc2d8efb.jpg" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                  </a>
              </div>
            </li>

          <li class="hex">
              <div class="hexIn">
                  <a class="hexLink" href="#">
                    <img src="https://farm5.staticflickr.com/4144/5053682635_b348b24698.jpg" alt="" />
                    <h1>This is a title</h1>
                    <p>Some sample text about the article this hexagon leads to</p>
                  </a>
              </div>
            </li>
          </ul>
      </section>

      <!--  début ligne 3  -->
      <section id="threeligne" class="container col-xs-10 col-sm-10 col-md-10 col-lg-10">
             <ul id="hexGrid">      
                <li class="hex">
                    <div class="hexIn">
                    <a class="hexLink" href="#">
                        <img src="https://farm8.staticflickr.com/7187/6895047173_d4b1a0d798.jpg" alt="" />
                        <h1>This is a title</h1>
                        <p>Some sample text about the article this hexagon leads to</p>
                    </a>
                    </div>
                </li>
            <li><h1 class="col-xs-4 col-sm-4 col-md-4 col-lg-4 TitreCentral">PoRtFoLiO</h1></li>     
            </ul>
         

    
        </section>  <!-- fin de la serie projets  --> 

  <footer class="footer container text-center">
    <article class="container">
      <p class="col-xs-4 col-sm-4 col-md-4 col-lg-4">&copy; CréaSoEva 2017</p>
      <p class="col-xs-4 col-sm-4 col-md-4 col-lg-4" href="contact.php">Contact</p>
      <p class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <i class="fab fa-github"></i>
        <i class="fab fa-facebook-square"></i>
        <i class="fab fa-twitter"></i>
      </p>
    </article>
  </footer>
  </main>
  
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" ></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    
</body>

 
</html>
