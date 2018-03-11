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

    public function index() {
        return view ('user.tasks.tasks');
    }
    public function show($id)
    {
        //
    }

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

