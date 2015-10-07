@extends('layout.master')
@section('title', 'Citas')
@section('content')

<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">

		<a href="{{ url('citas/create') }}" class="btn btn-lg btn-primary" role="button">Nueva Cita</a>

		
	</div>

	
	

	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		@include('messages.global-configuracion')
		@include('errors.errors')
		
		<div id="calendar"></div>

	</div>
</div>

@endsection

@section('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.js"></script>
<script src="{{ asset('assets/js/es.js') }}"></script>
<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			defaultView: 'agendaDay',
			allDaySlot: false,
			minTime:'06:00:00',
			businessHours:
			{
    start: '08:00', 
    end: '19:00', 

    dow: [ 1, 2, 3, 4, 5, 6 ]

},
header: {
	left: 'prev,next today',
	center: 'title',
	right: 'month,agendaWeek,agendaDay'
},
editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: [
			
			{
				title: 'Meeting',
				start: '2015-10-06T10:30:00',
				end: '2015-10-06T11:30:00',
				url: 'www.google.com'
			},
			
			]
		});

	});

</script>


@endsection
