@extends('layout.master')
@section('title', 'Inicio')
@section('content')
<div class="jumbotron">
<div class="container text-center">
    
     <a href="{{ url('pacientes') }}" title="Pacientes" class="btn btn-lg btn-primary main-menu">Pacientes</a>
     <a href="{{ url('citas') }}" title="Citas" class="btn btn-lg btn-primary main-menu">Citas</a>
     <a href="{{ url('dietas') }}" title="Dietas" class="btn btn-lg btn-primary main-menu">Dietas</a>
     <a href="" title="Reportes" class="btn btn-lg btn-primary main-menu">Reportes</a>
     <a href="{{ url('configuracion/configuracion-personal') }}" title="Configuracion" class="btn btn-lg btn-primary main-menu">Configuración</a>      
   
</div>
</div> <!-- end jumbotron -->
@endsection