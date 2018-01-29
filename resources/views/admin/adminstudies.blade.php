@extends('layouts.app')
@section('style')
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
    <section class="container">
      <h2 class="charte">Studies</h2>
      
          @if ($message = Session::get('success'))
               <div class=" col-8 alert alert-success charte">
                   {{ $message }}
               </div>
           @endif
      
      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
        
        @foreach($studies as $study)
        
        <p class="position">
          <h3>Numero d'enregistrement: </h3><span class="charte">{{ $study->id }} </span>  
          <h3>Nom: </h3><span class="charte"> {{ $study->name }} </span>
          <h3>Description: </h3><span class="charte"> {{ $study->description }} </span>
          <h3>Date de début: </h3><span class="charte"> {{ $study->date_start }} </span>
          <h3>Date de fin: </h3><span class="charte"> {{ $study->date_end }} </span>
        </p>        
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2 add" type="submit" href="{{ route('addadminstudies')}}">Ajouter</button>
         <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2 edit" type="submit" href="{{route('modif_adminstudies', array('id'=>$study->id))}}" >Modifier</button> 
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2 delete" type="submit" href="{{ route('suppr_studies', array('id'=>$study->id))}}" id="{{ $study->id }}">Supprimer</button></br>


        @endforeach

      </article>


      
    </section>

@endsection