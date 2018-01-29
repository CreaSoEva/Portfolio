@extends('layouts.app')
@section('style')
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
<section class="container">
      <h2 class="charte">Edit Skills</h2>
      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
        <p class="position">
          <form method="POST" action="{{route('saveeditadminskills')}}">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{$skills->id}}">
           
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
              <h3>Nom: </h3><input type="text" name="name" class="charte" value="{{$skills->name}}">
            </div>
            <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
              <h3>Type: </h3><input type="text" name="type" class="charte" value="{{$skills->type}}">
            </div>
            </br>
            
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit" name="valider">Valider</button>
          </form>  
        </p>        

      </article>      
    </section>    
    

@endsection