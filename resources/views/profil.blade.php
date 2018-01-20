@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/styleprofil.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')

  <!-- début partie centrale de la page composée de 3 colonnes-->

    <section class="container justify-content-center col-xs-12 col-sm-12 col-md-12 col-lg-12">

      <section id="Formations" class="container profilsection  col-xs-7 col-sm-6 col-md-5 col-lg-4" >
        <h2>FORMATION</h2>        
        <ul class="decoration">

          @foreach($studies as $study)
          <li><h3> {{ $study->name }} </h3> {{ $study->description }} <br/> {{ $study->date_start }} {{ $study->date_end }}<br/></li> 
          @endforeach

        </ul> 
      </section>


      <section id="Compétences" class="container profilsection col-xs-7 col-sm-6 col-md-5 col-lg-4">
        <h2>COMPÉTENCES</h2>
        <ul class="decoration">

          @foreach($skills as $skill)
          <li class="card border-light cadre col-xs-7 col-sm-6 col-md-5 col-lg-12">
            <h4>{{ $skill->type }}</h4>
            <h5>{{ $skill->name }}</h5>              
          </li>
           @endforeach   
           
        </ul>
      </section>


      <section id="Informations" class="container profilsection  col-xs-7 col-sm-6 col-md-5 col-lg-4">
        <h2>INFORMATIONS</h2>

        @foreach($informations as $information)            
       
        <article class="contenu ">
          <i class="far fa-envelope"></i>: {{ $information->email }}
        </article>
        <article class="contenu">
          <i class="fas fa-phone-volume"></i>: {{ $information->phone }}
        </article>
        <article class="contenu">
          <i class="fas fa-map-marker"></i>: {{ $information->postcode }} {{ $information->city }}
        </article>
        @endforeach
        
      </section>

    </section> 


@endsection