<?php

namespace App\Http\Controllers\users\tasks;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Task;
use App\Structure;
use Auth;







class UsertaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */





    public function GetUserTasks() {
        $user=(Auth::user()->login);

        $tasks=Task::where('Izpilditajs', '=', $user)->get();
        //    print_r($tasks);
        return response ($tasks);
    }

    public function TaskStatusUpdate(Request $request) {


        $task=Task::find($request->id);
        $task->status="Выполнено";

        $task->save();
        $task->delete();

        return response('OK');
    }

    public function DelayedTaskNotification(Request $request) {

        if (empty($request->ids)) {
            return response('nothing to notify');
        } else {

        foreach ($request->ids as $item) {
            $task=Task::find($item);
          //  print_r ($task->Izpilditajs);



}
        Mail::send('Mail.warning', ['title' => $task->Izpilditajs, 'content' => 'Работает'], function ($message)
        {


            $message->subject('Ну ни буя себе!');

            $message->to('romans@bmsgroup.eu');

        });

        return response ('Notification sent');
        }


     // $task=Task::findMany([$tmp]);

    }


}

