<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usertyp;
use App\User;
use Illuminate\Auth;
use App\structure;
use App\Calendar;


class RoomController extends Controller
{
   public function index() {
$structures=structure::all();
$users=User::all();
return view ('rooms', compact('users','structures'));
       
   }

   public function storeEvent(Request $request) {
   	$this->validate($request,[
            'event_type'=>'required',
          'event_start'=>'required',
          'ispolnitelj'=>'required',
          'room'=>'required'
        ]);
   	$events=Calendar::Create([
       'title'=>$request['event_type'],
       'info'=>$request['structureinfo'],
        'end'=>$request['event_end'],
   		'start'=>$request['event_start'],
   		'ispolnitelj'=>$request['ispolnitelj'],
   		'resourceId'=>$request['room'],
        ]);
   	
   	  return response ($events);

   }
public function GetCalendar() {

	$calendar=Calendar::all();
	return response($calendar);
}

public function GetRooms() {

	$rooms=Structure::all();
	return response($rooms);
}

public function GetEventInfo(request $request) {
	$event=Calendar::find($request->id);
	return response ($event);
}

public function DeleteEvent(request $request) {

	  $event=Calendar::find($request->id);
	
	$event->Delete();
	return response ($event);
}

public function checkEvent(request $request) {




 // $eventcheck=SELECT * FROM Calendars WHERE (start BETWEEN $request->event_start AND $request->event_end) OR (end BETWEEN $request->event_start AND $request->event_end);
 // //$eventcheck=Calendar::where('resourceId', $request->room)
  // ->orWhere('start', [$request->event_start,  $request->event_end])
  // ->orBetween('end', [$request->event_start, $request->event_end])->get();

  $eventcheck=Calendar::where('resourceId', $request->room)
  ->whereBetween ('start', [$request->event_start,$request->event_end])
  // ->orBetween ('end', [$request->event_start, $request->event_end])
  ->get();
  return response ($eventcheck);
}

}
