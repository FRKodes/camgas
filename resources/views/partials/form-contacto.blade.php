<div class="row form contacto">
	<div class="container">
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
				{!! Form::textarea('mensaje', null, ['class'=>'form-control', 'placeholder'=>'Mensaje']) !!}
			</div>
			<div class="form-group">
				<span>*Campos obligatorios</span>
				{!! Form::submit('Enviar', ['class'=>'submit-btn pull-right']) !!}
			</div>
		{!! Form::close() !!}
	</div>
</div>