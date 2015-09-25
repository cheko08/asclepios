@extends('layout.master')
@section('title', 'Pacientes')
@section('content')

<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">
		<a href="{{ url('pacientes/create') }}" class="btn btn-lg btn-primary" role="button">Nuevo Paciente</a>
	</div><!-- end side bar -->

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	@include('messages.global-configuracion')
	 @include('errors.errors')
		
				@foreach($pacientes as $paciente)

				<a href="{{ url('pacientes/'.$paciente->id) }}" title="{{$paciente->nombre}}" class="btn btn-lg btn-success pacientes-menu">
					{{$paciente->nombre}} {{$paciente->apellido_paterno}}
				</a>

				@endforeach

	</div><!-- end center screen -->

</div><!-- end Row -->

@endsection