<?php

namespace App\Http\Controllers\admin\tasks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Task;
use Illuminate\Auth;
use Carbon\Carbon;

class AdmintaskController extends Controller
{
    public function index()
    {
       $users = User::all();
//        $tasks = Task::withTrashed()->get();
//        var_dump($tasks);
        return view('admin.tasks.tasks', compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.tasks.tasks')->with('users', $users);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'uzdevums' => 'required',
            'izpilditajs' => 'required',
            'deadline' => 'required',
        ]);
        $status = "Выдано поручение";
        $darbadevejs = 'Boss';
        //   return response($request->name);
        $tasks = Task::Create([
            'uzdevums' => $request['uzdevums'],
            'Izpilditajs' => $request['izpilditajs'],
            'Darba devejs' => $darbadevejs,
            'name' => $request['name'],
            'status' => $status,
            'Izpildit_lidz' => $request['deadline']
        ]);
        return response($request);
    }

    public function editTask(Request $request)
    {
        $userlist = User::all();
        $taskedit = Task::find((int)$request->id);//->withtrash();

        return response(['userlist' => $userlist, 'taskedit' => $taskedit]);
    }

    public function updateTask(Request $request)
    {
        $this->validate($request, [
            'uzdevums' => 'required',
            'izpilditajs' => 'required',
            'deadlineedit' => 'required',
        ]);
        $task = Task::find($request->editid);
        $task->uzdevums = $request->uzdevums;
        $task->izpilditajs = $request->izpilditajs;
        $task->Izpildit_lidz = $request->deadlineedit;
        $task->name = $request->name;
        $task->save();
        return response('Updated!');
    }

    public function destroy(Request $request)
    {
        $task = Task::find($request->id);
        $task->forceDelete();
        return response($task);
    }

    public function GetTasks()
    {
        $tasks = Task::withTrashed()->get();
       // return response($tasks);
        return datatables ($tasks)->make(true);
    }
    public function GetDelayedTasks(Request $request)
    {
        $tasks = Task::withTrashed()->get();
//        return response($tasks);
        return response ($tasks);
    }
    public function DoneTasks() {
        $done=Task::where('status','Выполнено')->get();

        return response ($done);

    }

}
