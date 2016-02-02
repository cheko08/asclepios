@extends('layout.master')
@section('title', 'Dieta')
@section('content')

<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">
		<div class="form-group">
			<a href="{{ url('reportes') }}" class="btn btn-lg btn-default" role="button">Regresar</a>
		</div>
		<div class="form-group">
			<button  class="btn btn-lg btn-primary" onclick="javascript:window.print()">Imprimir Dieta</button>
		</div>
	</div>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div id="print">

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
			<ul class="list-inline">
			<li><strong>Nutriólogo:</strong> {{ Auth::user()->nombre.' '.Auth::user()->apellido_paterno }}</li>
			<li><strong>Cédula Profesional:</strong> {{ Auth::user()->cedula_profesional }}</li>
			<li><strong>Teléfono:</strong>{{ Auth::user()->telefono }}</li>
		</ul>
		</div>
	</div>
</div>

@endsection