@extends('layout.master')
@section('title', 'Citas')
@section('content')
<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">

		{!! Form::model($cita, ['url' => ['citas/update', $cita->id], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::submit('Guardar Cita', ['class' => 'btn btn-lg btn-success']) !!}
		</div>
		<div class="form-group">
			<a href="{{ url('citas') }}" class="btn btn-lg btn-default" role="button">Cancelar</a>
		</div>
		<div class="form-group">
			<a href="#" id="eliminar_cita" class="btn btn-lg btn-menu btn-danger" role="button">Eliminar</a>
		</div>

		
	</div>	
	

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		@include('messages.global-configuracion')
		@include('errors.errors')

<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}" >
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
			{!! Form::text('nombre', $cita->paciente->nombre.' '.$cita->paciente->apellido_paterno, ['readonly', 'class' => 'form-control']) !!}
		</div>

	</div>
</div>



@endsection
@section('scripts')

<script type="text/javascript">

	$('#eliminar_cita').click(function () {
		var token = $('#token').val();
		swal({
			title: "¿Desea borrar esta cita?",   
			text: "Una vez borrada no habrá manera de recuperar la información",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "Si, Estoy seguro!",   
			cancelButtonText: "Cancelar",   
			closeOnConfirm: false,   
			closeOnCancel: true 
		}, 
		function(isConfirm){   
			if (isConfirm) {     
				$.ajax({
					url: '{!! url("citas/destroy/".$cita->id) !!}',
					headers: {'X-CSRF-TOKEN': token},
					type: 'post'
					 }).then(function () {

					window.location.replace('{!! url("citas") !!}');
				});
			} 

		});

	});



</script>

@endsection