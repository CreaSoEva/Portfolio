@extends('layouts.app')
@section('style')
     <link href="{{ asset('css/admincontact.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
    <section class="container">
      <h2 class="charte">Contacts (liste)</h2>
      <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 justify-content-center">
        <article class="position"><h3>Nom: </h3><span class="charte"></span></article>
        <article class="position"><h3>Prénom</h3><span class="charte"></span></article>
        <article class="position"><h3>Mail</h3><span class="charte"></span></article>
        <article class="position"><h3>Message</h3><span class="charte"></span></article>
      </p>

      <button class="btn entourage btn-lg col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-5" type="submit">Supprimer</button>

      
    </section>

@endsection

