@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/stylecontact.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')

<!-- début zone contact  -->
    <section class="situation col-xs-12 col-sm-12 col-md-12 col-lg-12">    
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
      <form class= "style" method="post" action="">
              {{ csrf_field() }}    
      	
      	<p class="row alignement">
          	<input type="text" name="name" id="name" placeholder="Votre Nom" class="row col-xs-5 col-sm-5 col-md-5 col-lg-5 float-left inputbasic" size="20" maxlength="30" />
          	<input type="text" name="firstname" id="firstname" placeholder="Votre Prénom" class="row col-xs-5 col-sm-5 col-md-5 col-lg-5 ml-5 inputbasic" size="20" maxlength="30" />         	
        </p>

          </br> 

        <p class="row">
          	<input type="mail" name="email" id="email" placeholder="Votre Email" size="40" maxlength="30" class="inputbasic row col-xs-6 col-sm-6 col-md-7 col-lg-8"/> 
        </p>

          </br>
          
        <p class="container">
        	<p class="row alignement">
            <p><textarea type="text" name="contents" id="contents" placeholder="Votre Message" ROWS="10" cols="70" class="inputbasic col-xs-8 col-sm-8 col-md-8 col-lg-8"/></textarea></p>    	  
      	    <p id="motAccueil" class="col-xs-6 col-sm-6 col-md-4 col-lg-4">Si vous avez des questions,ou si vous voulez juste dire bonjour, n'hésitez pas à me contacter à mon email creasoeva03@gmail.com ou via le formulaire ci-contre.
            </p>
          </p>
        </p>

        <p class="container">
          <input id= "envoi" type="submit" name="valider" value="Envoyer" class="row col-xs-4 col-sm-4 col-md-2 col-lg-2 inputbasic"/>
        </p>        
          
    </form>    
	
		</section>  

 <!-- fin de la zone contact  --> 
		
	
@endsection