@extends('layout.master')
@section('title', 'Pacientes')
@section('content')

<div class="row">
	<div class="col-lg-2">
		<a href="{{ url('pacientes/create') }}" class="btn btn-lg btn-primary" role="button">Nuevo Paciente</a>
	</div><!-- end side bar -->

	<div class="col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				@foreach($pacientes as $paciente)

				<a href="{{ url('pacientes/'.$paciente->id) }}" title="{{$paciente->nombre}}" class="btn btn-lg btn-success pacientes-menu">
					{{$paciente->nombre}} {{$paciente->apellido_paterno}}
				</a>

				@endforeach
			</div><!-- end panel body -->
		</div><!-- end panel -->

	</div><!-- end center screen -->

</div><!-- end Row -->

@endsection