<!DOCTYPE html>
<html>
<head>
  <title>Portfolio</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/styleindex.css">  
</head>
<body>
  <main>
    <header>
        <p>
          <h1 id="TitreHeader" class="container ml-2">CREASOEVA</h1>
        </p>
        <p>
          <hr class="style-seven">
        </p>

           <!--début du menu de navigation  -->      
        <nav  id="menularge" class="container col-xs-8 col-sm-8 col-md-8 col-lg-8 navbar-fixed-top text-right navstyle">   
          <a class="fond col-xs-4 col-sm-4 col-md-4 col-lg-4" href="index.php">Home</a>   
          <a class="fond col-xs-4 col-sm-4 col-md-4 col-lg-4" href="profil.php">About Me</a>
          <a class="fond col-xs-4 col-sm-4 col-md-4 col-lg-4" href="contact.php">Contact</a> 
        </nav> 

               <!--menu court  -->

        <nav id="menucourt" class="btn-group container-fluid  center block"> 
          <button class="dropdown-toggle entourage" data-toggle="dropdown"><a class="fond" href="index.php">Home</button>
            <ul class="dropdown-menu entourage">    
              <li><a class="fond" href="profil.php">About Me</a></li>
              <li><a class="fond" href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

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
            <li><h1 col-xs-2 col-sm-3 col-md-4 col-lg-4" id="TitreCentral">PoRtFoLiO</h1></li>     
   			</ul>
         

	
		</section>  <!-- fin de la serie projets  --> 

  <footer class="footer container-fluid text-center">
    <article class="row">
      <p class="col-xs-4 col-sm-4 col-md-4 col-lg-4">&copy; CréaSoEva 2017</p>
      <p class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Mentions Légales</p>
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
    <script type="text/javascript" src="js/script.js"></script>
    
</body>

</html>