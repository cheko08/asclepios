@extends('layout.master')
@section('title', 'Pacientes')
@section('content')
@include('errors.errors')
<div class="row">
	<div class="col-lg-2">
		{!! Form::open(['url' => 'pacientes/store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::submit('Guardar Paciente', ['class' => 'btn btn-lg btn-success']) !!}
		</div>
		<div class="form-group">
			<a href="{{ url('pacientes') }}" class="btn btn-lg btn-default" role="button">Cancelar</a>
		</div>
	</div><!-- end side bar -->
	<div class="col-lg-10">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home">Información Personal</a></li>
			<li><a data-toggle="tab" href="#menu1">Información de Contacto</a></li>
			<li><a data-toggle="tab" href="#menu2">Información Médica</a></li>
		</ul>

		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
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
					{!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento', ['class' => 'control-label']) !!}
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>
						{!! Form::input('date', 'fecha_nacimiento', null, ['class' => 'form-control']) !!}
					</div>
				</div>

				<div class="form-group">
					<label class="radio-inline">
						{!! Form::radio('genero', 'Masculino', null, ['id' => 'masculino']) !!} Masculino
					</label>
					<label class="radio-inline">
						{!! Form::radio('genero', 'Femenino', null, ['id' => 'femenino']) !!} Femenino
					</label>
				</div> <!-- end sexo -->
			</div><!-- end tab 1 -->
			<div id="menu1" class="tab-pane fade">
				<div class="form-group">
					{!! Form::label('telefono', 'Teléfono', ['class' => 'control-label']) !!}
					
					{!! Form::text('telefono', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('celular', 'Celular', ['class' => 'control-label']) !!}
					
					{!! Form::text('celular', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('email', 'Correo Electrónico', ['class' => 'control-label']) !!}
					
					{!! Form::text('email', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('direccion', 'Dirección', ['class' => 'control-label']) !!}
					
					{!! Form::text('direccion', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('ciudad', 'Ciudad', ['class' => 'control-label']) !!}
					
					{!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
				</div>
			</div>
			<div id="menu2" class="tab-pane fade">
				

				<div class="form-group">
					{!! Form::label('sangre', 'Tipo de Sangre', ['class' => 'control-label']) !!}
					
					{!! Form::text('tipo_sangre', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('alergias', 'Alergias', ['class' => 'control-label']) !!}
					
					{!! Form::text('alergias', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('altura', 'Altura', ['class' => 'control-label']) !!}
					
					{!! Form::text('altura', null, ['class' => 'form-control']) !!}
				</div>
			</div>
		</div>


		
	</div><!-- end center screen -->
</div><!-- end Row -->
{!! Form::close() !!}
@endsection
