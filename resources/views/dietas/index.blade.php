@extends('layout.master')
@section('title', 'Dietas')
@section('content')
<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">
	
<a href="{{ url('dietas/create') }}" class="btn btn-lg btn-primary" role="button">Nueva Dieta</a>
	
		
	</div>

	
	

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	@include('messages.global-configuracion')
	 @include('errors.errors')
		
				@foreach($dietas as $dieta)

				<a href="{{ url('dietas/edit/'.$dieta->id) }}"  class="btn btn-lg btn-success pacientes-menu">
					{{ $dieta->nombre }} Calorias: {{ $dieta->numero_calorias }} 
				</a>

				@endforeach

				<div>{!! $dietas->render() !!}</div>

				
	
	</div>
</div>

@endsection