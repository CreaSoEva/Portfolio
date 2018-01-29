@extends('layouts.app')
@section('style')
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
<section class="container">
      <h2 class="charte">Edit Study</h2>
      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
        <p class="position">
          <form method="POST" action="{{route('saveeditadminstudies')}}">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{$studies->id}}">
            
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
              <h3>Nom: </h3><input type="text" name="name" class="charte" value="{{$studies->name}}">
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
              <h3>Description: </h3><input type="text" name="description" class="charte" value="{{$studies->description}}">
            </div>
            <div class="form-group {{ $errors->has('date_start') ? 'has-error' : '' }}">
              <h3>Date de début: </h3><input type="date" name="date_start" class="charte" value="{{$studies->date_start}}">
            </div>
            <div class="form-group {{ $errors->has('date_end') ? 'has-error' : '' }}">
              <h3>Date de fin: </h3><input type="date" name="date_end" class="charte" value="{{$studies->date_end}}">
            </div></br>
            
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit" name="valider">Valider</button>
          </form>  
        </p>        

      </article>      
    </section>    
    

@endsection