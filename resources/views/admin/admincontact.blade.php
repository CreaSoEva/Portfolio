@extends('layouts.app')
@section('style')
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
    <section class="container">
      <h2 class="charte">Contacts</h2>
      
          @if ($message = Session::get('success'))
               <div class=" col-8 alert alert-success charte">
                   {{ $message }}
               </div>
           @endif
      

      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
        
        @foreach($contacts as $contact)
        
        <p class="position">
          <h3>Numero d'enregistrement: </h3><span class="charte">{{ $contact->id }} </span>  
          <h3>Nom: </h3><span class="charte"> {{ $contact->name }} </span>
          <h3>Prenom: </h3><span class="charte"> {{ $contact->firstname }} </span>
          <h3>Email: </h3><span class="charte"> {{ $contact->email }} </span>
          <h3>Message: </h3><span class="charte"> {{ $contact->contents }} </span>
        </p>        

        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2 delete" type="submit" href="{{ route('suppr_contact', array('id'=>$contact->id))}}" id="{{ $contact->id }}" >Supprimer</button></br>


        @endforeach

      </article>

      
    </section>

@endsection