<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" />
  <title>Asclepios - @yield('title')</title>

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.css">
   <!-- Fonts -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet">
    
  </script>
    </head>
    <body>

      @include('layout.navigation')
      <div class="container-fluid">
       @include('messages.global')
       @yield('content')
     </div>


     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
      <script src="{{ asset('assets/js/moment.min.js') }}"></script>
     <script src="http://code.highcharts.com/highcharts.js"></script>
      <script src="{{ asset('assets/js/add_field.js') }}"></script>
     <!-- Latest compiled and minified JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     @yield('scripts')
   </body>
   </html>