@extends('layout.master')
@section('title', 'Dietas')
@section('content')
<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">

		{!! Form::open(['url' => 'pacientes/store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::submit('Guardar', ['class' => 'btn btn-lg btn-menu btn-success']) !!}
		</div>
		<div class="form-group">
			<a href="{{ url('dietas') }}" class="btn btn-lg btn-menu btn-default" role="button">Cancelar</a>
		</div>

		
	</div>

	
	

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		@include('messages.global-configuracion')
		@include('errors.errors')
		
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home">Información General</a></li>
			<li><a data-toggle="tab" href="#menu1">Día 1</a></li>
			<li><a data-toggle="tab" href="#menu2">Día 2</a></li>
			<li><a data-toggle="tab" href="#menu3">Día 3</a></li>
			<li><a data-toggle="tab" href="#menu4">Día 4</a></li>
			<li><a data-toggle="tab" href="#menu5">Día 5</a></li>
			<li><a data-toggle="tab" href="#menu6">Día 6</a></li>
			<li><a data-toggle="tab" href="#menu7">Día 7</a></li>

		</ul>

		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<div class="form-group">
					{!! Form::label('nombre', 'Nombre de la dieta', ['class' => 'control-label']) !!}
					
					{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
					
				</div>

				<div class="form-group">
					{!! Form::label('numero_calorias', 'Número de calorías', ['class' => 'control-label']) !!}
					
					{!! Form::text('numero_calorias', null, ['class' => 'form-control']) !!}
					
				</div>

				<div class="form-group">
					{!! Form::label('tipo_dieta', 'Tipo de dieta', ['class' => 'control-label']) !!}
					
					{!! Form::text('tipo_dieta', null, ['class' => 'form-control']) !!}
					
				</div>

			</div><!-- end tab 1 -->

			<div id="menu1" class="tab-pane fade">

			<div class="form-group">
					{!! Form::label('alimento_1', 'Alimento 1', ['class' => 'control-label']) !!}
					
					{!! Form::text('alimento_1', null, ['class' => 'form-control']) !!}
					
				</div>

				<div class="form-group">
					{!! Form::label('alimento_2', 'Alimento 2', ['class' => 'control-label']) !!}
					
					{!! Form::text('alimento_2', null, ['class' => 'form-control']) !!}
					
				</div>

				<div class="form-group">
					{!! Form::label('alimento_3', 'Alimento 3', ['class' => 'control-label']) !!}
					
					{!! Form::text('alimento_3', null, ['class' => 'form-control']) !!}
					
				</div>
					<div class="form-group">
					{!! Form::label('informacion_nutrimental_1', 'Información nutimental diaria', ['class' => 'control-label']) !!}
					
					{!! Form::textarea('informacion_nutrimental_1', null, ['class' => 'form-control']) !!}
					
				</div>
				
			</div><!-- end tab 2 -->

			<div id="menu2" class="tab-pane fade">
				

				
			</div><!-- end tab 3 -->

			<div id="menu3" class="tab-pane fade">
				

				
			</div><!-- end tab 4 -->

			<div id="menu4" class="tab-pane fade">
				

				
			</div><!-- end tab 5 -->

			<div id="menu5" class="tab-pane fade">
				

				
			</div><!-- end tab 6 -->

			<div id="menu6" class="tab-pane fade">
				

				
			</div><!-- end tab 7 -->

			<div id="menu7" class="tab-pane fade">
				

				
			</div><!-- end tab 8 -->

		</div> <!-- end tab content -->



	</div>
</div>


@endsection