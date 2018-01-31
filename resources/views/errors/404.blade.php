@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/style404.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
    
@section('content')

		<section class="container">
			<h1 class="centrage taille1">404</h1>
			<h2 class="centrage taille2">DÉSOLÉ <br>LA PAGE QUE VOUS RECHERCHEZ N'EXISTE PAS</h2>
			<h2>Vous allez être redirigé vers notre page Accueil dans 5 secondes</h2>		
		</section>

@endsection
@section('scripts')
<script type="text/javascript">
	$(document).ready (function(){
			setTimeout(function () {    
    			window.location.href ="{{ route('accueil') }}"; 
		},5000); // 5 seconds
	});
</script>
@endsection