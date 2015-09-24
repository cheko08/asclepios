@extends('layout.master')
@section('title', 'Configuración Personal')
@section('content')
<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">
		<ul class="nav nav-sidebar">
			<li><a href="{{ url('configuracion/configuracion-personal') }}">Configuración Personal</a></li>
			<li><a href="#">Catálogos</a></li>
			<li class="active"><a href="{{ url('configuracion/configuracion-seguridad') }}">Configuración de Seguridad <span class="sr-only">(current)</span></a></li>

		</ul>

	</div><!-- end side bar -->
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		@include('messages.global-configuracion')
		@include('errors.errors')

		{!! Form::model($user, ['url' => ['configuracion/updateConfiguracionSeguridad', $user->id], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}

		

		<div class="form-group">
			
			{!! Form::label('email', 'Correo Electrónico', ['class' => 'control-label']) !!}
			
			{!! Form::text('email', null, ['readonly', 'class' => 'form-control']) !!}
			
		</div>

		<div class="form-group">
			{!! Form::label('old_password', 'Contraseña Actual') !!}
			{!! Form::password('old_password', ['class' => 'form-control']) !!}
		</div>   

		<div class="form-group">
			{!! Form::label('password', 'Nueva Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password_confirmation', 'Confirmar Contraseña') !!}
			{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
		</div>

		

		<div class="form-group">

			{!! Form::submit('Guardar', ['class' => 'btn btn-menu btn-success']) !!}

		</div>

		{!! Form::close() !!}
	</div>

	@endsection