<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}"><span>CAMGAS</span></a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="quienes"><a title="Quiénes somos" href="{{ url('quienes-somos') }}">Quiénes somos</a></li>
				<li class="socios"><a title="Socios" href="{{ url('socios') }}">Socios</a></li>
				<li class="reguladoras"><a title="Empresas Reguladoras" href="{{ url('empresas-reguladoras') }}">Empresas Reguladoras</a></li>
				<li class="precios"><a title="Precios Gas LP" target="_blank" href="http://www.gas.pemex.com.mx/PGPB/Productos+y+servicios/Gas+licuado/Precios/">Precios Gas LP</a></li>
				<li class="normatividad"><a title="Normatividad" target="_blank" href="http://firagas.org.mx/normatividadmateriagaslp.html">Normatividad</a></li>
				<li class="riesgos"><a title="Manejo de Riesgos" href="{{ url('manejo-de-riesgos') }}">Manejo de Riesgos</a></li>
				<li class="contacto"><a title="Contacto" href="{{ url('contacto') }}">Contacto</a></li>
			</ul>
		</div>
	</div>
</nav>