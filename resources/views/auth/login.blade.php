@extends('layout.master')
@section('title', 'Iniciar Sesión')
@section('content')


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			@include('errors.errors')

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Inicia Sesión</h3>
				</div>
				<div class="panel-body">
					{!! Form::open(['url' => 'auth/login', 'method' => 'POST', 'class' => 'form-signin']) !!}

					<div class="form-group">
						{!! Form::label('email', 'Correo Electrónico') !!}
						{!! Form::text('email', null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('password', 'Contraseña') !!}
						{!! Form::password('password', ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label>
								{!! Form::checkbox('remember') !!}
								Recordar mi sesión
							</label>
						</div>
					</div>


					<div class="form-group">
						<button type="submit" class="btn btn-primary">
							<i class="fa fa-btn fa-sign-in"> </i>  Iniciar Sesión
						</button>
					</div>

					{!! Form::close() !!}
				</div>
			</div>

		</div>
		<div class="col-sm-6" id="front">

		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12" align="center" id="front-icon">	

		<h1 class="front-page-title">Asclepios <small>sistema de administración para nutriólogos</small></h1>

	</div>
</div>

<div class="jumbotron">

	<div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">

		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="first-slide" src="{{ url('assets/images/Captura7.png')}}" alt="First slide">
				<div class="container">

				</div>
			</div>
			<div class="item">
				<img class="second-slide" src="{{ url('assets/images/Captura11.png')}}" alt="Second slide">
				<div class="container">

				</div>
			</div>
			<div class="item">
				<img class="third-slide" src="{{ url('assets/images/Captura10.PNG')}}" alt="Third slide">
				<div class="container">

				</div>
			</div>
		</div>

	</div>

	<!-- <div class="row">
	<div class="col-md-4">
		<img class="img-responsive" src="{{ url('assets/images/Captura7.png')}}" alt="First slide">
	</div>
	<div class="col-md-4">
		<img class="img-responsive" src="{{ url('assets/images/Captura11.png')}}" alt="First slide">
	</div>
	<div class="col-md-4">
		<img class="img-responsive" src="{{ url('assets/images/Captura10.png')}}" alt="First slide">
	</div>
</div> -->
</div>


<!-- 	
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      Indicators
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="{{ url('assets/images/Captura7.png')}}" alt="First slide">
          <div class="container">
           
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="{{ url('assets/images/Captura11.png')}}" alt="Second slide">
          <div class="container">
           
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="{{ url('assets/images/Captura10.PNG')}}" alt="Third slide">
          <div class="container">
           
          </div>
        </div>
      </div>
   
    </div>/.carousel
-->


@endsection