@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/styleprofil.css') }}" rel="stylesheet">
@endsection

@section('content')

  <!-- début partie centrale de la page composée de 3 colonnes-->

    <section class="container justify-content-center col-xs-10 col-sm-10 col-md-10 col-lg-10">

      <section id="Formation" class="container profilsection float-left col-xs-4 col-sm-4 col-md-4 col-lg-4" >
        <h2>FORMATION</h2>
        <ul class="decoration">
          <li>Bac</li>
          <li>Diplôme universitaire</li>
          <li>Stage Manager Métier</li>
          <li>Formation développement Web</li>
        </ul> 
      </section>


      <section id="Compétences" class="container profilsection col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <h2>COMPÉTENCES</h2>
        <ul class="decoration ">
          <li>
            <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h2>Bac</h2>
                <div class="progress">
                  <div class="progress-bar coloris" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    <span class="sr-only">70% Complete</span>
                  </div>
                </div>
              </div>
          </li>
          <li>
            <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h2>Bac</h2>
                <div class="progress">
                  <div class="progress-bar coloris" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    <span class="sr-only">70% Complete</span>
                  </div>
                </div>
              </div>
          </li>
          <li>
            <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h2>Bac</h2>
                <div class="progress">
                  <div class="progress-bar coloris" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    <span class="sr-only">70% Complete</span>
                  </div>
                </div>
              </div>
          </li>
          <li>
            <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h2>Bac</h2>
                <div class="progress">
                  <div class="progress-bar coloris" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    <span class="sr-only">70% Complete</span>
                  </div>
                </div>
              </div>
          </li>
          <li>
            <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h2>Bac</h2>
                <div class="progress">
                  <div class="progress-bar coloris" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    <span class="sr-only">70% Complete</span>
                  </div>
                </div>
              </div>
          </li>
        </ul>
      </section>


      <section class="container profilsection float-right col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <h2>INFORMATIONS</h2>
        <article class="container contenu ">
          <i class="far fa-envelope"></i>: creasoeva03@gmail.com
        </article>
        <article class="container contenu">
          <i class="fas fa-phone-volume"></i>: 06.20.21.53.16
        </article>
        <article class="container contenu">
          <i class="fas fa-map-marker"></i>: 03800 Gannat
        </article>
      </section>
    </section> 


@endsection