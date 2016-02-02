@extends('layout.master')
@section('title', 'Dietas')
@section('content')
<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">
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
		<form action="{{url('dietas/store')}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="tab-content">

				<div id="home" class="tab-pane fade in active">
				<div class="form-group">
						<label for="nombre" class="control-label">Nombre de la Dieta</label>
						<input type="text" name="nombre" class="form-control">
					</div>
					<div class="form-group">
						<label for="calorias" class="control-label">Calorias</label>
						<input type="text" name="numero_calorias" class="form-control">
					</div>
					<div class="form-group">
						<label for="tipo" class="control-label">Tipo de Dieta</label>
						<input type="text" name="tipo_dieta" class="form-control">
					</div>


				</div><!-- end home -->


				<div id="menu1" class="tab-pane fade">
					<button id="add_field_button1" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 1</label>
						<input type="text" name="alimento_1[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 2</label>
						<input type="text" name="alimento_1[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 3</label>
						<input type="text" name="alimento_1[]" class="form-control">
					</div>
				</div><!-- end menu1 -->



				<div id="menu2" class="tab-pane fade">
					<button id="add_field_button2" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 1</label>
						<input type="text" name="alimento_2[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 2</label>
						<input type="text" name="alimento_2[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 3</label>
						<input type="text" name="alimento_2[]" class="form-control">
					</div>
				</div><!-- end menu2 -->



				<div id="menu3" class="tab-pane fade">
					<button id="add_field_button3" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 1</label>
						<input type="text" name="alimento_3[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 2</label>
						<input type="text" name="alimento_3[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 3</label>
						<input type="text" name="alimento_3[]" class="form-control">
					</div>
				</div><!-- end menu3 -->


				<div id="menu4" class="tab-pane fade">
					<button id="add_field_button4" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 1</label>
						<input type="text" name="alimento_4[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 2</label>
						<input type="text" name="alimento_4[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 3</label>
						<input type="text" name="alimento_4[]" class="form-control">
					</div>
				</div><!-- end menu4 -->


				<div id="menu5" class="tab-pane fade">
					<button id="add_field_button5" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 1</label>
						<input type="text" name="alimento_5[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 2</label>
						<input type="text" name="alimento_5[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 3</label>
						<input type="text" name="alimento_5[]" class="form-control">
					</div>
				</div><!-- end menu5 -->



				<div id="menu6" class="tab-pane fade">
					<button id="add_field_button6" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 1</label>
						<input type="text" name="alimento_6[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 2</label>
						<input type="text" name="alimento_6[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 3</label>
						<input type="text" name="alimento_6[]" class="form-control">
					</div>
				</div><!-- end menu6 -->



				<div id="menu7" class="tab-pane fade">
					<button id="add_field_button7" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 1</label>
						<input type="text" name="alimento_7[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 2</label>
						<input type="text" name="alimento_7[]" class="form-control">
					</div>
					<div class="form-group">
						<label for="alimento" class="control-label">Alimento 3</label>
						<input type="text" name="alimento_7[]" class="form-control">
					</div>	
				
			</div><!-- end menu7 -->
	<input type="submit" value="Guardar" class="btn btn-lg btn-menu btn-success">
				</form>


		</div><!-- end tab-content-->

	</div>	<!-- end main -->

</div><!-- end row -->

@endsection