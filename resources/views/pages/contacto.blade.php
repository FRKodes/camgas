@extends('default')

@section('content')

<div class="row">
	<figure class="block-1">
		<img src="images/mapa.png" alt="Mapa de ubicación CAMGAS">
	</figure>
</div>

<div class="row section-title contacto">
	<div class="container">
		<h2>Contacto</h2>
	</div>
</div>
<div class="row">
	<div class="container-fluid">
		@include('partials.form-contacto')
	</div>
</div>
@endsection
