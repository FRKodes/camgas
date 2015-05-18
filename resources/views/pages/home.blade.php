@extends('default')

@section('content')

<div class="row">
	<figure class="block-1">
		<img src="images/home-plataforma-petrolera.jpg" alt="Plataforma Petrolera, CAMGAS">
	</figure>
</div>

<div class="row welcome">
	<span class="arrow-right">Bienvenidos a <b>CAMGAS</b></span>
</div>


<div class="container features">
	<div class="row">
		<div class="feature">
			<div class="icon icon-iconoreloj"></div>
			<div class="text">Experiencia de 20 años representando a la industria</div>
		</div>
		<hr>
		<div class="sep"></div>
		<div class="feature">
			<div class="icon icon-iconoempresas"></div>
			<div class="text">Actualmente contamos con <b>200</b> socios activos</div>
		</div>
		<hr>
		<div class="sep"></div>
		<div class="feature">
			<div class="icon icon-iconomex"></div>
			<div class="text">Contamos con socios en todo el país</div>
		</div>
	</div>
</div>

<div class="row img-up">
	<figure class="block-1">
		<img src="images/home-planta.jpg" alt="Planta, CAMGAS">
	</figure>
</div>

<div class="row block-text porque">
	<div class="container">
		<h2>¿Porqué elegir <b>CAMGAS</b>?</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora non provident in, id, quidem nemo. Veniam explicabo ab, eveniet, ipsam distinctio illum debitis aspernatur non perferendis, reiciendis ea accusantium. Vero.
		</p>
	</div>
</div>

<div class="row img-up extract">
	<figure class="block-1 extract">
		<img src="images/home-extraccion.jpg" alt="Extraccion, CAMGAS">
	</figure>
</div>

<div class="row block-text asesoria">
	<div class="container">
		<h2>Asesoría <b>jurídica y normativa</b></h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora non provident in, id, quidem nemo. Veniam explicabo ab, eveniet, ipsam distinctio illum debitis aspernatur non perferendis, reiciendis ea accusantium. Vero.
		</p>
	</div>
</div>

<div class="row">
	<figure class="block-1">
		<img src="images/home-esferas.jpg" alt="Esferas, CAMGAS">
	</figure>
</div>

<div class="row block-text other-block">
	<div class="container">
		<h2>Servicios a <b>asociados</b></h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora non provident in, id, quidem nemo. Veniam explicabo ab, eveniet, ipsam distinctio illum debitis aspernatur non perferendis, reiciendis ea accusantium. Vero.
		</p>
	</div>
</div>

<div class="row form">
	<div class="container">
		<h2>Asóciate con nosotros</h2>
		{!! Form::open() !!}
			<div class="form-group">
				{!! Form::input('text', 'nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre*']) !!}
			</div>
			<div class="form-group">
				{!! Form::input('text', 'empresa', null, ['class'=>'form-control', 'placeholder'=>'Empresa']) !!}
			</div>
			<div class="form-group">
				{!! Form::input('text', 'email', null, ['class'=>'form-control', 'placeholder'=>'Correo Electrónico*']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Enviar', ['class'=>'submit-btn pull-right']) !!}
			</div>
		{!! Form::close() !!}
	</div>
	<div class="container">
		<p class="text-center">Envía tus datos y personal autorizado se pondrá muy pronto en comunicación contigo.</p>
	</div>
</div>

@endsection
