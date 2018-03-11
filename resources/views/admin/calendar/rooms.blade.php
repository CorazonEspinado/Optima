@extends ('Layouts.template')


@section ('content')

 @include ('admin.calendar.calendarform')
 @include ('admin.calendar.showevent')
 @include('admin.calendar.inputincalendarform')
 @include ('admin.calendar.editdeleteevent')

    <script src="{{asset('js/moment.js')}}"></script>
    

   
    <link href="{{ asset('calendar/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('calendar/scheduler/dist/scheduler.css') }}" rel="stylesheet">
    
    <script src="{{asset('calendar/fullcalendar.js')}}"></script>
    <script src="{{asset('calendar/scheduler/dist/scheduler.js')}}"></script>
    <script src="{{asset('js/admin/calendarscript.js')}}"></script>
    <script src="{{asset('calendar/locale/ru.js')}}"></script>



    <title>{{ config('app.name', 'Laravel') }}</title>

   
     
</head>
<body>
	<button type="button"  data-toggle="modal" data-target="#calendarform1" id="calendarform1">Добавить событие</button>


	<div id='calendar'></div>

	
	</body>
	

	</html>

@endsection


