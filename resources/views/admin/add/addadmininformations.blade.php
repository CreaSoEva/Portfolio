@extends('layouts.app')
@section('style')
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
<section class="container">
      <h2 class="charte">Add Informations</h2>
      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
        <p class="position">
          <form method="POST" action="{{route('goaddadmininformations')}}">
            {{ csrf_field() }}

            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            <h3>Nom: </h3><input type="text" name="name" class="charte">
            <h3>Mail: </h3><input type="text" name="email" class="charte">
            <h3>Code postal: </h3><input type="text" name="postcode" class="charte">
            <h3>Ville: </h3><input type="text" name="city" class="charte">
            <h3>Numero de téléphone: </h3><input type="text" name="phone" class="charte"></br>
            
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit" name="valider">Valider</button>
          </form>  
        </p>        

      </article>      
    </section>    
    

@endsection






