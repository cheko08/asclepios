@extends('layout.master')
@section('title', 'Consultas')
@section('content')

<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">

		
      

<a href="{{ url('consultas/'.$paciente->id) }}" class="btn btn-lg btn-default" role="button">Regresar</a>

</div>




<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	@include('messages.global-configuracion')
	@include('errors.errors')

<div id="grafica_peso">
	
</div>

<div id="grafica_imc">
	
</div>
	


	
</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$(function () { 
		$('#grafica_peso').highcharts({
			chart: {
				type: 'column'
			},
			credits: {
				enabled: false
			},
			title: {
				text: 'Peso'
			},
			xAxis: {
				categories: [
				@foreach($consultas as $consulta)
				'{!!  date("d/m/Y",strtotime($consulta->created_at)) !!}',
				@endforeach
				]
			},
			yAxis: {
				title: {
					text: 'Kilogramos'
				}
			},
			series: [{
				name: '{!! $paciente->nombre !!}',
				data: [
				@foreach($consultas as $consulta)
				{!! $consulta->peso_kilos !!},
				@endforeach
				]
			}],

		});
	});




	$(function () { 
		$('#grafica_imc').highcharts({
			chart: {
				type: 'column'
			},
			credits: {
				enabled: false
			},
			title: {
				text: 'Índice de Masa Muscular'
			},
			xAxis: {
				categories: [
				@foreach($consultas as $consulta)
				'{!! date("d/m/Y",strtotime($consulta->created_at)) !!}',
				@endforeach
				]
			},
			yAxis: {
				title: {
					text: 'Índice de Masa Muscular'
				}
			},
			series: [{
				name: '{!! $paciente->nombre !!}',
				data: [
				@foreach($consultas as $consulta)
				{!! $consulta->imc !!},
				@endforeach
				],
				color: '#FF0000'
			}]
		});
	});
</script>
@endsection