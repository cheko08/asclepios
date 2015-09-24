@extends('layout.master')
@section('title', 'Configuración Personal')
@section('content')
<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">
		<ul class="nav nav-sidebar">
			<li class="active"><a href="{{ url('configuracion/configuracion-personal') }}">Configuración Personal <span class="sr-only">(current)</span></a></li>
			<li><a href="#">Catálogos</a></li>
			<li><a href="{{ url('configuracion/configuracion-seguridad') }}">Configuración de Seguridad</a></li>

		</ul>

	</div><!-- end side bar -->
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	@include('messages.global-configuracion')
	 @include('errors.errors')

		{!! Form::model($user, ['url' => ['configuracion/updateConfiguracionPersonal', $user->id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}

		<div class="form-group">

			{!! Form::label('nombre', 'Nombres', ['class' => 'control-label']) !!}

			{!! Form::text('nombre', null, ['class' => 'form-control']) !!}

		</div>  

		<div class="form-group">
			
			{!! Form::label('apellido_paterno', 'Apellido Paterno', ['class' => 'control-label']) !!}
			
			{!! Form::text('apellido_paterno', null, ['class' => 'form-control']) !!}
			
		</div>  

			<div class="form-group">
			
			{!! Form::label('apellido_materno', 'Apellido Materno', ['class' => 'control-label']) !!}
			
			{!! Form::text('apellido_materno', null, ['class' => 'form-control']) !!}
			
		</div> 

		<div class="form-group">
			
			{!! Form::label('email', 'Correo Electrónico', ['class' => 'control-label']) !!}
			
			{!! Form::text('email', null, ['class' => 'form-control']) !!}
			
		</div>   

		<div class="form-group">
			
			{!! Form::label('cedula_profesional', 'Cedula Profesional', ['class' => 'control-label']) !!}
			
			{!! Form::text('cedula_profesional', null, ['class' => 'form-control']) !!}
			
		</div> 

		<div class="form-group">
			
			{!! Form::label('telefono', 'Teléfono', ['class' => 'control-label']) !!}
			
			{!! Form::text('telefono', null, ['class' => 'form-control']) !!}
			
		</div> 

			<div class="form-group">
			
			{!! Form::label('telefono_2', 'Teléfono 2', ['class' => 'control-label']) !!}
			
			{!! Form::text('telefono_2', null, ['class' => 'form-control']) !!}
			
		</div>  

			<div class="form-group">
			
			{!! Form::label('direccion', 'Dirección', ['class' => 'control-label']) !!}
			
			{!! Form::text('direccion', null, ['class' => 'form-control']) !!}
			
		</div>  

		<div class="form-group">
			
			{!! Form::label('logo_consultorio', 'Logotipo', ['class' => 'control-label']) !!}
			
			{!! Form::file('logo_consultorio', null, ['class' => 'form-control']) !!}
			
		</div>

		<div class="form-group">
			<img src="{{ asset('logos/'.$user->logo_consultorio) }}" alt="..." class="img-thumbnail">
		</div>


		<div class="form-group">

		{!! Form::submit('Guardar', ['class' => 'btn btn-menu btn-success']) !!}

		</div>

		{!! Form::close() !!}
	</div>
	@endsection