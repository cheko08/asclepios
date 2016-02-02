@extends('layout.master')
@section('title', 'Dietas')
@section('content')

<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">

			<div class="form-group">
			<a href="#" id="eliminar_dieta" class="btn btn-lg btn-menu btn-danger" role="button">Eliminar</a>
		</div>
		<div class="form-group">
			<a href="{{ url('dietas') }}" class="btn btn-lg btn-menu btn-default" role="button">Cancelar</a>
		</div>

	</div>	
		<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}" > 

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="table">
				<table class="table table-bordered">
					<thead>
						<tr>
						<th></th>
						<?php $x = 1; ?>
						@foreach($alimento_1 as $alimento)
							<th>Alimento {{$x}}</th>
							<?php $x++; ?>
							@endforeach
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Dia 1</th>
							@foreach($alimento_1 as $alimento)

							<td>
							{{ $alimento->nombre }}</td>

							@endforeach
							
						</tr>

						<tr>
							<th>Dia 2</th>
							@foreach($alimento_2 as $alimento)

							<td>
							{{ $alimento->nombre }}</td>

							@endforeach
							
						</tr>

						<tr>
							<th>Dia 3</th>
							@foreach($alimento_3 as $alimento)

							<td>
							{{ $alimento->nombre }}</td>

							@endforeach
							
						</tr>

						<tr>
							<th>Dia 4</th>
							@foreach($alimento_4 as $alimento)

							<td>
							{{ $alimento->nombre }}</td>

							@endforeach
							
						</tr>

						<tr>
							<th>Dia 5</th>
							@foreach($alimento_5 as $alimento)

							<td>
							{{ $alimento->nombre }}</td>

							@endforeach
							
						</tr>

						<tr>
							<th>Dia 6</th>
							@foreach($alimento_6 as $alimento)

							<td>
							{{ $alimento->nombre }}</td>

							@endforeach
							
						</tr>

						<tr>
							<th>Dia 7</th>
							@foreach($alimento_7 as $alimento)

							<td>
							{{ $alimento->nombre }}</td>

							@endforeach
							
						</tr>



					</tbody>
				</table>
			</div>
		
	</div>
</div>
@endsection
@section('scripts')

<script type="text/javascript">

	$('#eliminar_dieta').click(function () {
		var token = $('#token').val();
		swal({
			title: "¿Desea borrar esta Dieta?",   
			text: "Una vez borrada no habrá manera de recuperar la información",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "Si, Estoy seguro!",   
			cancelButtonText: "Cancelar",   
			closeOnConfirm: false,   
			closeOnCancel: true 
		}, 
		function(isConfirm){   
			if (isConfirm) {     
				$.ajax({
					url: '{!! url("dietas/destroy/".$dieta->id) !!}',
					headers: {'X-CSRF-TOKEN': token},
					type: 'post'
					 }).then(function () {

					window.location.replace('{!! url("dietas") !!}');
				});
			} 

		});

	});



</script>

@endsection