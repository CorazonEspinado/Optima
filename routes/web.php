<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['auth']], function () {

Route::get('/', 'MainController@index')->name('main');
 //Route::get('/client', 'MainController@client');

/* ----------------AJAX users--------------------------*/

    Route::group(['middleware' => ['IsAdmin']], function () {

Route::get('/users/GetUserData', 'admin\users\AdminuserController@GetUserData');
Route::post('/users/store', 'admin\users\AdminuserController@store');
Route::post('/users/destroy', 'admin\users\AdminuserController@destroy');
Route::post('/users/show', 'admin\users\AdminuserController@show');
Route::get('/Usertypes/GetUserTypes', 'admin\users\AdminuserController@GetUserTypes');
Route::get('/users/GeneratePassword', 'admin\users\AdminuserController@GeneratePassword');
Route::post('/users/changePassword', 'admin\users\AdminuserController@changePassword');
Route::post('/users/storeUsers', 'admin\users\AdminuserController@store');
Route::post('/users/edit', 'admin\users\AdminuserController@EditUser');
Route::post('/users/UpdateUser', 'admin\users\AdminuserController@UpdateUser');
Route::resource('users', 'admin\users\AdminuserController');
/*----------------------------------------------------- */
/*-----------------AJAX tasks--------------------------- */




Route::get('/tasks/GetTasks', 'admin\tasks\AdmintaskController@GetTasks');
Route::get('/tasks/GetDelayedTasks', 'admin\tasks\AdmintaskController@GetDelayedTasks');
Route::post('/tasks/storeTask', 'admin\tasks\AdmintaskController@Store');
Route::post('/tasks/destroy', 'admin\tasks\AdmintaskController@destroy');
Route::post('/tasks/editTask', 'admin\tasks\AdmintaskController@editTask');
Route::post('/tasks/updateTask', 'admin\tasks\AdmintaskController@updateTask');
Route::get('/tasks/DoneTasks', 'admin\tasks\AdmintaskController@DoneTasks');




Route::resource('structure','admin\structures\AdminstructureController');
Route::get('tasks', 'admin\tasks\AdmintaskController@index');

//------------------------------AJAX Structures--------------

Route::post('/structure/storeStructure', 'admin\structures\AdminstructureController@store');
Route::get('structures/StructureList', 'admin\structures\AdminstructureController@GetStructures');



//-----------------Admin Calendar
  Route::get('admin/rooms', 'admin\calendar\RoomController@index');
 Route::get('admin/structures/StructureCalendar', 'admin\structures\AdminstructureController@GetStructuresCalendar');
Route::get('admin/structures/calendarstrukturesusers', 'admin\structures\AdminstructureController@calendarstrukturesusers');
Route::post('admin/calendar/storeEvent', 'admin\calendar\RoomController@storeEvent');
Route::get('admin/calendar/GetCalendar', 'admin\calendar\RoomController@GetCalendar');
Route::get('admin/calendar/GetRooms', 'admin\calendar\RoomController@GetRooms');
Route::post('admin/calendar/GetEventInfo', 'admin\calendar\RoomController@GetEventInfo');
Route::post('admin/calendar/DeleteEvent', 'admin\calendar\RoomController@DeleteEvent');


});
Route::post('admin/calendar/checkEvent', 'admin\calendar\RoomController@checkEvent');//вынесено из админской части, исрльзуется клиентом тоже

//------------------User Calendar/
 
 Route::get('users/calendar/UserGetRooms', 'users\calendar\UsersRoomController@GetRooms'); 
 Route::get('users/calendar/GetCalendar', 'users\calendar\UsersRoomController@GetCalendar');
 Route::post('users/calendar/GetEventInfo', 'users\calendar\UsersRoomController@GetEventInfo');
 Route::get('CheckAuthorization','users\calendar\UsersRoomController@CheckAuth');
 Route::post('users/calendar/storeEvent', 'users\calendar\UsersRoomController@storeEvent');
 Route::post('users/calendar/UserDeleteEvent', 'users\calendar\UsersRoomController@UserDeleteEvent');
 
    //

Route::get('userstasks', 'users\tasks\UsertaskController@index');
Route::get('usersrooms', 'users\calendar\UsersRoomController@index');
Route::post('/tasks/DelayedTaskNotification', 'UsertaskController@DelayedTaskNotification');
Route::get('/tasks/GetUserTasks', 'users\tasks\UsertaskController@GetUserTasks');
Route::post('/tasks/StatusUpdate', 'users\tasks\UsertaskController@TaskStatusUpdate');

});

Auth::routes();









