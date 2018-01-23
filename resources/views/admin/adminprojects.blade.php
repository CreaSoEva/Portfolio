@extends('layouts.app')
@section('style')
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
    <section class="container">
      <h2 class="charte">Projets</h2>
      <div class="col-md-8 col-md-offset-2">
          @if ($message = Session::get('success'))
               <div class="alert alert-success charte">
                   {{ $message }}
               </div>
           @endif
      <div class="panel panel-default">
      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
        
        @foreach($projets as $projet)
        
        <p class="position">
          <h3>Numero d'enregistrement: </h3><span class="charte">{{ $projet->id }} </span>  
          <h3>Titre: </h3><span class="charte"> {{ $projet->title }} </span>
          <h3>Description: </h3><span class="charte"> {{ $projet->description }} </span>
          <h3>Image: </h3><span class="charte"> {{ $projet->image }} </span>
          <h3>Date du projet: </h3><span class="charte"> {{ $projet->date_projet }} </span>
        </p>        
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit">Ajouter</button>
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit">Modifier</button>
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2 delete" type="submit" href="{{ route('suppr_projet', array('id'=>$projet->id))}}" id="{{ $projet->id }}">Supprimer</button></br>


        @endforeach

      </article>


      
    </section>

@endsection