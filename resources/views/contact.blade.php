<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="css/style.css">  	
  <link rel="stylesheet" type="text/css" href="css/stylecontact.css">    
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

			
      <!--début du menu de navigation  -->      
      <nav class="container col-xs-8 col-sm-8 col-md-8 col-lg-8 navbar-fixed-top text-right navstyle">   
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

<!-- début zone contact  -->
    <section class="situation">    

    <form class= "style" method="post" action="">
    
      	<p class="container-fluid ">
        	<p class="container col-xs-10 col-sm-10 col-md-10 col-lg-10 alignement">
          		<input type="text" name="nom" id="nom" placeholder="Votre Nom" class="row col-xs-4 col-sm-4 col-md-4 col-lg-4 ml-5 mr-5 float-left inputbasic" size="20" maxlength="30" />
          		<input type="text" name="prenom" id="prenom" placeholder="Votre Prénom" class="row col-xs-4 col-sm-4 col-md-4 col-lg-4 ml-5 mr-5 inputbasic" size="20" maxlength="30" />
         	<p id="motAccueil" class="row col-xs-4 col-sm-4 col-md-4 col-lg-4 float-right">Si vous avez des questions,ou si vous voulez juste dire bonjour, n'hésitez pas à me contacter à mon email creasoeva03@gmail.com ou via le formulaire ci-contre.
         	</p>
        	</p>
        	<p class="container col-xs-10 col-sm-10 col-md-10 col-lg-10">
          		<input type="mail" name="mail" id="mail" placeholder="Votre Email" size="20" maxlength="30" class="inputbasic"/> 
        	</p>
        	<p class="container col-xs-10 col-sm-10 col-md-10 col-lg-10">
          
            	<textarea  type="text" name="message" id="message" placeholder="Votre Message" ROWS="10" cols="50" class="inputbasic"/></textarea>          
            	<input  id= "envoi" type="submit" name="valider" value="Envoyer" class="inputbasic ml-4 mr-4"/>
        	</p>
      	</p>
    </form>

    
	
		</section>  

 <!-- fin de la zone contact  --> 
		
	
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