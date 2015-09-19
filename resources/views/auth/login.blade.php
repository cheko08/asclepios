@extends('layout.master')
@section('title', 'Iniciar Sesión')
@section('content')


	{!! Form::open(['url' => 'auth/login', 'method' => 'POST']) !!}

	<div class="form-group">
		{!! Form::label('email', 'Correo Electrónico') !!}
		{!! Form::text('email', null, ['class' => 'form-control login']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('password', 'Contraseña') !!}
		{!! Form::password('password', ['class' => 'form-control login']) !!}
	</div>
	<div class="form-group">
		<div class="checkbox">
			<label>
				{!! Form::checkbox('remember') !!}
				Recordar mi sesión
			</label>
		</div>
	</div>


	<div class="form-group">
		{!! Form::submit('Iniciar Sesión', ['class' => 'btn btn-default']) !!}
	</div>

	{!! Form::close() !!}



@endsection