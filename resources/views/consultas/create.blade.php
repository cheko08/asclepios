@extends('layout.master')
@section('title', 'Consultas')
@section('content')
<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">
	{!! Form::open(['url' => 'consultas/store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::submit('Guardar Consulta', ['class' => 'btn btn-lg btn-success']) !!}
		</div>
		<div class="form-group">
			<a href="{{ url('consultas/'.$paciente) }}" class="btn btn-lg btn-default" role="button">Cancelar</a>
		</div>
	</div>

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	@include('messages.global-configuracion')
	 @include('errors.errors')
		
				<div class="form-group">
					{!! Form::label('paciente', 'ID Paciente', ['class' => 'control-label']) !!}
					
					{!! Form::text('paciente_id', $paciente, ['readonly', 'class' => 'form-control']) !!}
					
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
					{!! Form::label('dieta', 'Dieta', ['class' => 'control-label']) !!}
					
					<select class="form-control" name="dieta_id">
				<option value=""></option>

				@foreach($dietas as $dieta)
				<option value="{{ $dieta->id }}">{{$dieta->nombre.' - '.$dieta->numero_calorias.' Calorias' }}</option>
				@endforeach


			</select>
					
				</div>

						<div class="form-group">
					{!! Form::label('comentarios', 'Comentarios', ['class' => 'control-label']) !!}
					
					{!! Form::textarea('comentarios', null, ['class' => 'form-control']) !!}
					
				</div>
	</div>
</div>
@endsection