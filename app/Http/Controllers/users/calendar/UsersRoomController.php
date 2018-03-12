<?php

namespace App\Http\Controllers\users\calendar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usertyp;
use App\User;
use Auth;
use App\structure;
use App\Calendar;


class UsersRoomController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
 }
    
    public function index() {
        
$structures=structure::all();
$user=auth::user();


return view ('user.calendar.calendar', compact('user','structures'));
    }
    
    public function GetRooms() {

        $user=Auth::user();
	$rooms=Structure::all();
	return response($rooms);
}
public function GetCalendar() {

	$calendar=Calendar::all();
	return response($calendar);
}
public function GetEventInfo(request $request) {
    
	$event=Calendar::find($request->id);
	return response ($event);
}

public function CheckAuth() {
    $user=auth::user();
    return response ($user);
}
}
