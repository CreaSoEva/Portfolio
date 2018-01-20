@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/styleindex.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section id="firstligne" class="container col-xs-10 col-sm-10 col-md-10 col-lg-10">  
      <ul id="hexGrid"> 
        @foreach($projets as $index=>$projet)
          <li class="hex">
            <div class="hexIn">
              <a class="hexLink" href="{{url('img/'.$projet->image)}}" >
                <img src="{{url('img/'.$projet->image)}}" alt="Image"/>               
                <h1>{{ $projet->title }}</h1>
                <p>{{ $projet->description }}</p>
              </a>
            </div>
          </li>

        @if( ($index+1) % 4==0)
      </ul>
    </section>
    <section id="{{ (($index+1) % 3==0) ? 'firstligne' : 'twoligne' }}" class="container col-xs-10 col-sm-10 col-md-10 col-lg-10">
      <ul id="hexGrid">
        @endif
        @endforeach

        
        <h1 class="col-xs-6 col-sm-6 col-md-6 col-lg-6 TitreCentral">
        PoRtFoLiO</h1>
      </ul>
    </section>
@endsection



