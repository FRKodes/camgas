<!DOCTYPE html>
<html lang="es">
<head>
	@include('partials.metas')
	@include('partials.styles')
</head>
<body>
	<header>		
		@include('partials.nav')
	</header>
	
	<section class="container-fluid">
		@yield('content')
	</section>

	<footer>
		@include('partials.footer')
	</footer>

	<script src="{{ elixir('js/custom-scripts.min.js')}}"></script>
</body>
</html>
