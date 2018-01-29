@extends('layouts.app')
@section('style')
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
<section class="container">
      <h2 class="charte">Edit Informations</h2>
      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
        <p class="position">
          <form method="POST" action="{{route('saveeditadmininformations')}}">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{$informations->id}}">
            
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
              <h3>Nom: </h3><input type="text" name="name" class="charte" value="{{$informations->name}}">
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
              <h3>Mail: </h3><input type="text" name="email" class="charte" value="{{$informations->email}}">
            </div>
            <div class="form-group {{ $errors->has('postcode') ? 'has-error' : '' }}">
              <h3>Code postal: </h3><input type="text" name="postcode" class="charte" value="{{$informations->postcode}}">
            </div>
            <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
              <h3>Ville: </h3><input type="text" name="city" class="charte" value="{{$informations->city}}">
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
              <h3>Numero de téléphone: </h3><input type="text" name="phone" class="charte" value="{{$informations->phone}}">
            </div></br>
            
        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit" name="valider">Valider</button>
          </form>  
        </p>        

      </article>      
    </section>    
    

@endsection

