@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/stylecontact.css') }}" rel="stylesheet">
@endsection
@section('content')

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
		
	
@endsection