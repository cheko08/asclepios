@extends('layout.master')
@section('title', 'Registro')
@section('content')

{!! Form::open(['url' => 'auth/register', 'method' => 'POST', 'class' => 'form-signin']) !!}

<div class="form-group">
	{!! Form::label('nombre', 'Nombres') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control login']) !!}
</div>

<div class="form-group">
	{!! Form::label('apellido_paterno', 'Apellido Paterno') !!}
	{!! Form::text('apellido_paterno', null, ['class' => 'form-control login']) !!}
</div>

<div class="form-group">
	{!! Form::label('apellido_materno', 'Apellido Materno') !!}
	{!! Form::text('apellido_materno', null, ['class' => 'form-control login']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Correo Electrónico') !!}
	{!! Form::text('email', null, ['class' => 'form-control login']) !!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Contraseña') !!}
	{!! Form::password('password', ['class' => 'form-control login']) !!}
</div>

<div class="form-group">
	{!! Form::label('password_confirmation', 'Confirmar Contraseña') !!}
	{!! Form::password('password_confirmation', ['class' => 'form-control login']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Registrarse', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection