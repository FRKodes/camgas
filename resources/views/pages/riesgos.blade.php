@extends('default')

@section('content')

<div class="row">
	<figure class="block-1">
		<img src="images/banner-manejo-de-riesgos.jpg" alt="Banner manejo de riesgos, CAMGAS">
	</figure>
</div>

<div class="row section-title">
	<div class="container">
		<h2>Manejo de riesgos</h2>
	</div>
</div>
<div class="row">
	<div class="container">
		
		<div class="risks">
			
			@include('partials.riesgos.cilindro')

			@include('partials.riesgos.estacionario')

			@include('partials.riesgos.calentadores')

			@include('partials.riesgos.olor')

			@include('partials.riesgos.fugas')

		</div>
		
	</div>
</div>
@endsection
