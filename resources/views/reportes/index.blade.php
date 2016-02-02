@extends('layout.master')
@section('title', 'Reportes')
@section('content')

<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">
		
	</div><!-- end side bar -->

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	@include('messages.global-configuracion')
	 @include('errors.errors')
		
				@foreach($pacientes as $paciente)

				<a href="{{ url('consultas/graficas/'.$paciente->id) }}" title="{{$paciente->nombre}}" class="btn btn-lg btn-success pacientes-menu">
					{{$paciente->nombre}} {{$paciente->apellido_paterno}}
				</a>

				@endforeach

	</div><!-- end center screen -->

</div><!-- end Row -->

@endsection

