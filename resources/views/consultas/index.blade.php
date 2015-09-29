@extends('layout.master')
@section('title', 'Consultas')
@section('content')

<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">
	
<a href="{{ url('consultas/create/'.$paciente) }}" class="btn btn-lg btn-primary" role="button">Nueva Consulta</a>
	
</br></br><a href="{{ url('consultas/graficas/'.$paciente) }}" class="btn btn-lg btn-default" role="button">Ver Gráficas</a>

			</br></br><a href="{{ url('pacientes/'.$paciente) }}" class="btn btn-lg btn-default" role="button">Cancelar</a>
		
	</div>

	
	

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	@include('messages.global-configuracion')
	 @include('errors.errors')
		
				@foreach($consultas as $consulta)

				<a href="{{ url('consultas/edit/'.$consulta->id) }}"  class="btn btn-lg btn-success pacientes-menu">
					{{date("d/m/Y",strtotime($consulta->created_at))}} 
				</a>

				@endforeach

				<div>{!! $consultas->render() !!}</div>

				
	
	</div>
</div>
@endsection