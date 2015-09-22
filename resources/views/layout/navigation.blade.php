 <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
           data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">
            <img alt="Brand" src="{{ asset('assets/images/rsz_1favicon.png')  }}" class="img-responsive"> 
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        @if(Auth::check())
          <ul class="nav navbar-nav">
            <li class="{{Request::path() == '/' ? 'active' : ''}}"><a href="{{ url('/') }}">Inicio</a></li>
            <li class="{{Request::path() == 'pacientes' ? 'active' : ''}}"><a href="{{ url('pacientes') }}">Pacientes</a></li>
            <li class="{{Request::path() == 'citas' ? 'active' : ''}}"><a href="#contact">Citas</a></li>
            <li class="{{Request::path() == 'dietas' ? 'active' : ''}}"><a href="#contact">Dietas</a></li>
            <li class="{{Request::path() == 'reportes' ? 'active' : ''}}"><a href="#contact">Reportes</a></li>
          </ul>
        @endif
          <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
               aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
               {{ Auth::user()->nombre }}
               {{ Auth::user()->apellido_paterno }}
                <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Configuración</a></li>
                <li><a href="{{ url('auth/logout') }}">Cerrar Sesión</a></li>
              </ul>
            </li>
        @else
            <li class="{{Request::path() == 'auth/login' ? 'active' : ''}}"><a href="{{ url('auth/login') }}">Iniciar Sesión</a></li>
            <li class="{{Request::path() == 'auth/register' ? 'active' : ''}}"><a href="{{ url('auth/register') }}">Registrarse</a></li>
        @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>