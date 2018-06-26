<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Task;
use App\Structure;
use Auth;

class MainController extends Controller
{
 public function __construct()
    {
        $this->middleware('auth');
 }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   if ((Auth::user()->usertype)=="0") {
         return view ('user.main');
     } else if ((Auth::user()->usertype)=="1") {
         return view ('admin.main');
     };


    }

    public function client()
    {

        $tasks=Task::all();

//dd($users);

        return view ('user.main', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function logout()
{
        session_unset();
        Session()->flush();
//    $this->guard()->logout();

   

    

    return redirect('/login');
}
}
