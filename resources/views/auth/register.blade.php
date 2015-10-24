@extends('layout.master')
@section('title', 'Registro')
@section('content')
@include('errors.errors')
{!! Form::open(['url' => 'auth/register', 'method' => 'POST', 'class' => 'form-signin']) !!}

<div class="form-group">
	{!! Form::label('nombre', 'Nombres') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('apellido_paterno', 'Apellido Paterno') !!}
	{!! Form::text('apellido_paterno', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('apellido_materno', 'Apellido Materno') !!}
	{!! Form::text('apellido_materno', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Correo Electrónico') !!}
	{!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Contraseña') !!}
	{!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('password_confirmation', 'Confirmar Contraseña') !!}
	{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Registrarse', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

{!! Form::open(['url' => 'stripe', 'method' => 'POST']) !!}
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_1uYojjUSrYhLlC6P8vQCGBVo"
    data-amount="7900"
    data-name="Asclepios"
    data-description="Subscripción Mensual ($79.00 MXN)"
    data-image="{{ asset('assets/images/favicon.png')  }}"
    data-locale="auto">
  </script>
</form>

@endsection