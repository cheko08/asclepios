@extends('layout.master')
@section('title', 'Consultas')
@section('content')
@include('errors.errors')
<div class="row">
	<div class="col-lg-2">
	{!! Form::model($consulta, ['url' => ['consultas/update', $consulta->id],  'method' => 'PATCH', 'class' => 'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::submit('Guardar Consulta', ['class' => 'btn btn-lg btn-success']) !!}
		</div>
		<div class="form-group">
			<a href="{{ url('consultas/'.$consulta->paciente_id) }}" class="btn btn-menu btn-lg btn-default" role="button">Cancelar</a>
		</div>

		<div class="form-group">
			<a href="#" id="eliminar_consulta" class="btn btn-lg btn-menu btn-danger" role="button">Eliminar</a>
		</div>
	</div>

	<div class="col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="form-group">
				<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}" > 
					{!! Form::label('paciente', 'ID Paciente', ['class' => 'control-label']) !!}
					
					{!! Form::text('paciente_id', null, ['readonly', 'class' => 'form-control']) !!}
					
				</div>

				<div class="form-group">
					{!! Form::label('peso', 'Peso Kg', ['class' => 'control-label']) !!}
					
					{!! Form::text('peso_kilos', null, ['class' => 'form-control']) !!}
					
				</div>

				<div class="form-group">
					{!! Form::label('imc', 'IMC', ['class' => 'control-label']) !!}
					
					{!! Form::text('imc', null, ['class' => 'form-control']) !!}
					
				</div>

					<div class="form-group">
					{!! Form::label('porcentaje_grasa', 'Porcentaje de Grasa', ['class' => 'control-label']) !!}
					
					{!! Form::text('porcentaje_grasa', null, ['class' => 'form-control']) !!}
					
				</div>

					<div class="form-group">
					{!! Form::label('hidratacion', 'Hidratación', ['class' => 'control-label']) !!}
					
					{!! Form::text('hidratacion', null, ['class' => 'form-control']) !!}
					
				</div>

						<div class="form-group">
					{!! Form::label('comentarios', 'Comentarios', ['class' => 'control-label']) !!}
					
					{!! Form::textarea('comentarios', null, ['class' => 'form-control']) !!}
					
				</div>


			</div><!-- end panel body -->
		</div><!-- end panel -->
	</div>
</div>
{!! Form::close() !!}
@endsection
@section('scripts')

<script type="text/javascript">

	$('#eliminar_consulta').click(function () {
		var token = $('#token').val();
		swal({
			title: "¿Desea borrar esta consulta?",   
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
					url: '{!! url("consultas/destroy/".$consulta->id) !!}',
					headers: {'X-CSRF-TOKEN': token},
					type: 'post'
					 }).then(function () {

					window.location.replace('{!! url("consultas/".$consulta->paciente_id) !!}');
				});
			} 

		});

	});



</script>

@endsection