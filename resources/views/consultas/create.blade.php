@extends('layout.master')
@section('title', 'Consultas')
@section('content')

<div class="row">
	<div class="col-lg-2">
	{!! Form::open(['url' => 'consultas/store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::submit('Guardar Consulta', ['class' => 'btn btn-lg btn-success']) !!}
		</div>
		<div class="form-group">
			<a href="{{ url('consultas/'.$paciente) }}" class="btn btn-lg btn-default" role="button">Cancelar</a>
		</div>
	</div>

	<div class="col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="form-group">
					{!! Form::label('paciente', 'ID Paciente', ['class' => 'control-label']) !!}
					
					{!! Form::text('paciente_id', $paciente, ['readonly', 'class' => 'form-control margin-bottom']) !!}
					
				</div>

				<div class="form-group">
					{!! Form::label('peso', 'Peso Kg', ['class' => 'control-label']) !!}
					
					{!! Form::text('peso_kilos', null, ['class' => 'form-control margin-bottom']) !!}
					
				</div>

				<div class="form-group">
					{!! Form::label('imc', 'IMC', ['class' => 'control-label']) !!}
					
					{!! Form::text('imc', null, ['class' => 'form-control margin-bottom']) !!}
					
				</div>

					<div class="form-group">
					{!! Form::label('porcentaje_grasa', 'Porcentaje de Grasa', ['class' => 'control-label']) !!}
					
					{!! Form::text('porcentaje_grasa', null, ['class' => 'form-control margin-bottom']) !!}
					
				</div>

					<div class="form-group">
					{!! Form::label('hidratacion', 'Hidratación', ['class' => 'control-label']) !!}
					
					{!! Form::text('hidratacion', null, ['class' => 'form-control margin-bottom']) !!}
					
				</div>

						<div class="form-group">
					{!! Form::label('comentarios', 'Comentarios', ['class' => 'control-label']) !!}
					
					{!! Form::textarea('comentarios', null, ['class' => 'form-control margin-bottom']) !!}
					
				</div>


			</div><!-- end panel body -->
		</div><!-- end panel -->
	</div>
</div>
@endsection