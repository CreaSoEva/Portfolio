@extends('layouts.app')
@section('style')
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
<section class="container">
      <h2 class="charte">Add Project</h2>
      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
        <p class="position">
          <form method="POST" action="{{route('goaddadminprojects')}}">
            {{ csrf_field() }}

            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            <h3>Titre: </h3><input type="text" name="title" class="charte">
            <h3>Description: </h3><input type="text" name="description" class="charte">
            <h3>Image: </h3><input type="text" name="image" class="charte">
            <h3>Date du projet: </h3><input type="date" name="date_projet" class="charte"></br>

        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit" name="valider">Valider</button>
          </form>  
        </p>        

      </article>      
    </section>    
    

@endsection






