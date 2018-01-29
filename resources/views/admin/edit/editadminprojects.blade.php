@extends('layouts.app')
@section('style')
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
<section class="container">
      <h2 class="charte">Edit Projets</h2>
      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
        <p class="position">
          <form method="POST" action="{{route('saveeditadminprojects')}}">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{$projets->id}}">
       
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
              <h3>Titre: </h3><input type="text" name="title" class="charte" value="{{$projets->title}}">
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
              <h3>Description: </h3><input type="text" name="description" class="charte" value="{{$projets->description}}">
            </div>
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
              <h3>Image: </h3><input type="text" name="image" class="charte" value="{{$projets->image}}">
            </div>
            <div class="form-group {{ $errors->has('date_projet') ? 'has-error' : '' }}">
              <h3>Date du projet: </h3><input type="date" name="date_projet" class="charte" value="{{$projets->date_projet}}">
            </div></br>
            
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit" name="valider">Valider</button>
          </form>  
        </p>        

      </article>      
    </section>    
    

@endsection