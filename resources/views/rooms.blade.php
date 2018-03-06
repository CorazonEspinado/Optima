@extends ('Layouts.template')


@section ('content')

 @include ('calendarform')
 @include ('showevent')
 @include('inputincalendarform')
 @include ('editdeleteevent')
<style type="text/css">
    /*.fc-past {
    background-color: silver;
}*/
</style>
    <script src="{{asset('js/moment.js')}}"></script>
    

   
    <link href="{{ asset('calendar/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('calendar/scheduler/dist/scheduler.css') }}" rel="stylesheet">
    
    <script src="{{asset('calendar/fullcalendar.js')}}"></script>
    <script src="{{asset('calendar/scheduler/dist/scheduler.js')}}"></script>
    <script src="{{asset('calendar/calendarscript.js')}}"></script>
    <script src="{{asset('calendar/locale/ru.js')}}"></script>



    <title>{{ config('app.name', 'Laravel') }}</title>

    <script type="text/javascript">
    	
    </script>
     
</head>
<body>
	<button type="button"  data-toggle="modal" data-target="#calendarform1" id="calendarform1">Добавить событие</button>


	<div id='calendar'></div>

	
	</body>
	

	</html>

@endsection


