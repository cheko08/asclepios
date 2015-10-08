@extends('layout.master')
@section('title', 'Citas')
@section('content')
<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">

		{!! Form::open(['url' => 'citas/store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::submit('Guardar Cita', ['class' => 'btn btn-lg btn-success']) !!}
		</div>
		<div class="form-group">
			<a href="{{ url('citas') }}" class="btn btn-lg btn-default" role="button">Cancelar</a>
		</div>

		
	</div>

	
	

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		@include('messages.global-configuracion')
		@include('errors.errors')

		<div class="form-group">
			{!! Form::label('fecha', 'Fecha de la cita', ['class' => 'control-label']) !!}
			<div class="input-group">
				<div class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></div>
				{!! Form::input('date', 'fecha', null, ['class' => 'form-control']) !!}
			</div>
		</div>


		<div class="form-group">
			{!! Form::label('hora_inicio', 'Hora de Inicio', ['class' => 'control-label']) !!}

			{!! Form::input('time', 'hora_inicio', null, ['class' => 'form-control']) !!}

		</div>

			<div class="form-group">
			{!! Form::label('hora_fin', 'Hasta', ['class' => 'control-label']) !!}

			{!! Form::input('time', 'hora_fin', null, ['class' => 'form-control']) !!}

		</div>





		<div class="form-group">
			{!! Form::label('paciente_id', 'Paciente', ['class' => 'control-label']) !!}
			<select class="form-control" name="paciente_id" id="ex-client">
				<option value=""></option>

				@foreach($pacientes as $paciente)
				<option value="{{ $paciente->id }}">{{$paciente->nombre.'  '.$paciente->apellido_paterno.'  '.$paciente->apellido_materno }}</option>
				@endforeach


			</select>
		</div>


		<button type="button" class="btn btn-success" id="show">Agregar Paciente</button>
		<div id="nuevo_paciente">
			<div class="row">
				<div class="col-xs-4">
					<div class="form-group">
						{!! Form::label('nombre', 'Nombres', ['class' => 'control-label']) !!}

						{!! Form::text('nombre', null, ['class' => 'form-control']) !!}

					</div>
				</div>
				<div class="col-xs-4">
					<div class="form-group">
						{!! Form::label('apellido_paterno', 'Apellido Paterno', ['class' => 'control-label']) !!}

						{!! Form::text('apellido_paterno', null, ['class' => 'form-control']) !!}

					</div>
				</div>
				<div class="col-xs-4">
					<div class="form-group">
						{!! Form::label('apellido_materno', 'Apellido Materno', ['class' => 'control-label']) !!}

						{!! Form::text('apellido_materno', null, ['class' => 'form-control']) !!}

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<div class="form-group">
						{!! Form::label('telefono', 'Teléfono', ['class' => 'control-label']) !!}

						{!! Form::text('telefono', null, ['class' => 'form-control']) !!}
					</div>
				</div>
				<div class="col-xs-6">

					<div class="form-group">
						{!! Form::label('celular', 'Celular', ['class' => 'control-label']) !!}

						{!! Form::text('celular', null, ['class' => 'form-control']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){

		$("#nuevo_paciente").hide();

		$("#show").click(function(){
			$("#nuevo_paciente").toggle();
			$("#ex-client").val('');
			$("#ex-client").toggle();
		});
	});

</script>

@endsection