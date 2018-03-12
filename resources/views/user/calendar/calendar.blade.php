@extends ('Layouts.template')
@include('user.calendar.viewownevent')
@include('user.calendar.newownevent')
@include('user.calendar.inputowncalendar')


@section ('content')
<script src="{{asset('js/moment.js')}}"></script>
   
    <link href="{{ asset('calendar/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('calendar/scheduler/dist/scheduler.css') }}" rel="stylesheet">
    
    <script src="{{asset('calendar/fullcalendar.js')}}"></script>
    <script src="{{asset('calendar/scheduler/dist/scheduler.js')}}"></script>
    <script src="{{asset('js/admin/calendarscript.js')}}"></script>
    <script src="{{asset('calendar/locale/ru.js')}}"></script>

<script src="{{asset('js/user/usercalendar.js')}}"></script>


   

   
     
</head>
<body>
	<button type="button"  data-toggle="modal" data-target="#addownevent" id="calendarform1">Добавить событие</button>


	<div id='usercalendar'></div>

	
	</body>
	

	</html>

@endsection

