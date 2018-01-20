@extends('layouts.admin')
@section('style')
     <link href="{{ asset('css/styleindex.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
     
@endsection

@section('content')
<section class="container-fluid hauteur">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="justify-content-center">
                <h1 class="fond panel-heading">Bienvenue sur votre Administration</h1>

                <div class="fond panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection
