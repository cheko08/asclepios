@extends('layout.master')
@section('title', 'Citas')
@section('content')
<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">

		{!! Form::open(['url' => 'consultas/store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

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
					{!! Form::label('paciente', 'Paciente', ['class' => 'control-label']) !!}
					
					{!! Form::text('paciente_id', null, ['class' => 'form-control']) !!}
					
				</div>

				
		
		

	</div>
</div>

@endsection