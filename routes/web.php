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
Route::get('structures/StructureCalendar', 'admin\structures\AdminstructureController@GetStructuresCalendar');
Route::get('structures/calendarstrukturesusers', 'admin\structures\AdminstructureController@calendarstrukturesusers');
Route::post('calendar/storeEvent', 'RoomController@storeEvent');
Route::get('calendar/GetCalendar', 'RoomController@GetCalendar');
Route::get('calendar/GetRooms', 'RoomController@GetRooms');
Route::post('calendar/GetEventInfo', 'RoomController@GetEventInfo');
Route::post('calendar/DeleteEvent', 'RoomController@DeleteEvent');
Route::post('calendar/checkEvent', 'RoomController@checkEvent');



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


});
    Route::get('/rooms', 'RoomController@index');



/*--------------------------------------------------------- */

    //


Route::post('/tasks/DelayedTaskNotification', 'UsertaskController@DelayedTaskNotification');

Route::get('/tasks/GetUserTasks', 'users\tasks\UsertaskController@GetUserTasks');
Route::post('/tasks/StatusUpdate', 'users\tasks\UsertaskController@TaskStatusUpdate');
});

Auth::routes();









