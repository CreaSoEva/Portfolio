@extends('layouts.app')
@section('style')
     <link href="{{ asset('css/styleindex.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid hauteur">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
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
</div>
@endsection
