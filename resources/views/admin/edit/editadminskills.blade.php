@extends('layouts.app')
@section('style')
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
    <section class="container">
      <h2 class="charte">Skills</h2>
      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
        
        @foreach($skills as $skill)
        
        <p class="position">
          <h3>Numero d'enregistrement: </h3><span class="charte">{{ $skill->id }} </span>  
          <h3>Nom: </h3><span class="charte"> {{ $skill->name }} </span>
          <h3>Type: </h3><span class="charte"> {{ $skill->type }} </span>
        </p>        
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit">Valider</button>

        @endforeach

      </article>
      
    </section>

@endsection