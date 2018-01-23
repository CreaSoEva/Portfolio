<!-- @extends('layouts.app')
@section('style')
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
<section class="container">
      <h2 class="charte">Add Study</h2>
      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
        <p class="position">
          <form method="POST" action="">
            {{ csrf_field() }}
            <h3>Numero d'enregistrement: </h3>
            <input type="hidden" name="id_user" value="1">
            <h3>Nom: </h3>
            <label for="name">Nom : </label>
            <input type="text" name="name" class="charte">
            <h3>Description: </h3>
            <label for="description">Description : </label>
            <input type="text" name="description" class="charte"></input>
            <h3>Date de début: </h3>
            <label for="date_start">Date de début : </label>
            <input type="date" name="date_start" class="charte">
            <h3>Date de fin: </h3>
            <label for="date_end">Date de fin : </label>
            <input type="date" name="date_end" class="charte">
          </form>  
        </p>        
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit" name="valider">Valider</button>
      </article>      
    </section>    
    

@endsection

 

      <h3>Numero d'enregistrement: </h3><span class="charte">{{ $study->id }} </span>  
            <h3>Nom: </h3><span class="charte"> {{ $study->name }} </span>
            <h3>Description: </h3><span class="charte"> {{ $study->description }} </span>
            <h3>Date de début: </h3><span class="charte"> {{ $study->date_start }} </span>
            <h3>Date de fin: </h3><span class="charte"> {{ $study->date_end }} </span> -->