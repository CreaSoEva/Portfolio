@extends('layouts.admin')
@section('style')
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
    <section class="container">
      <h2 class="charte">Studies</h2>
      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
        
        @foreach($studies as $study)
        
        <p class="position">
          <h3>Numero d'enregistrement: </h3><span class="charte">{{ $study->id }} </span>  
          <h3>Nom: </h3><span class="charte"> {{ $study->name }} </span>
          <h3>Description: </h3><span class="charte"> {{ $study->description }} </span>
          <h3>Date de début: </h3><span class="charte"> {{ $study->date_start }} </span>
          <h3>Date de fin: </h3><span class="charte"> {{ $study->date_end }} </span>
        </p>        
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit">Ajouter</button>
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit">Modifier</button>
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit">Supprimer</button></br>

        @endforeach

      </article>


      
    </section>

@endsection