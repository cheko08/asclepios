@extends('layout.master')
@section('title', 'Consultas')
@section('content')

<div class="row">
	<div class="col-lg-2">
	
<a href="{{ url('consultas/create/'.$paciente) }}" class="btn btn-lg btn-primary" role="button">Nueva Consulta</a>
	


			</br></br><a href="{{ url('pacientes/'.$paciente) }}" class="btn btn-lg btn-default" role="button">Cancelar</a>
		
	</div>

	
	

	<div class="col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				@foreach($consultas as $consulta)

				<a href="{{ url('consultas/edit/'.$consulta->id) }}"  class="btn btn-lg btn-success pacientes-menu">
					{{$consulta->created_at}} 
				</a>

				@endforeach
			</div><!-- end panel body -->
		</div><!-- end panel -->
	</div>
</div>
@endsection