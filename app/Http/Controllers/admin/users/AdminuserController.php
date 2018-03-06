<?php

namespace App\Http\Controllers\admin\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usertyp;
use App\User;
use Illuminate\Auth;
use App\structure;


class AdminuserController extends Controller
{
    public function __construct()
    {
        $this->middleware('IsAdmin');
    }

    public function GetUserTypes()
    {
        $usertypes = Usertyp::all();
        return view('admin.users.usertypeselect')->with('usertypes', $usertypes);
    }

    public function index()
    {
        $structures=structure::all();
        return view('admin.users.users')->with('structures', $structures);
    }

    public function create()
    {
        $structures=structure::all();
        return view('admin.users.users')->with('structures', $structures);
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'surname' => 'required|string|max:255',
                'userstruktura' => 'required|string|max:255',
                'usertype' => 'required',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
                'pilseta' => 'required|string|max:255',
                'iela' => 'required|string|max:255|alpha_num',
                'house' => 'required|string|max:3',
                'room' => 'required|string|max:3',
                'phone1' => 'required|string|max:8|min:8',
                'phone2' => 'required|string|max:8|min:8',
            ]);
            User::create([
                'name' => $request['name'],
                'surname' => $request['surname'],
                'login' => $request['login'],
                'struktura' => $request['userstruktura'],
                'email' => $request['email'],
                'usertype' => $request['usertype'],
                'pilseta' => $request['pilseta'],
                'iela' => $request['iela'],
                'house' => $request['house'],
                'room' => $request['room'],
                'phone1' => $request['phone1'],
                'phone2' => $request['phone2'],
                'password' => bcrypt($request['password'])
            ]);
        }
        return response($request);
    }

    public function EditUser(request $request)
    {
        $user = User::find($request->id);
        return response($user);
    }

    public function UpdateUser(request $request)
    {
        $this->validate($request, [
            'editname' => 'required',
            'editsurname' => 'required',
            'editlogin' => 'required',
            'editstruktura' => 'required',
            'editusertype' => 'required',
            'editemail' => 'required',
            'editpilseta' => 'required',
            'editiela' => 'required',
            'edithouse' => 'required',
            'editphone1' => 'required',
        ]);
        $userupdate = User::find($request->editid);
        $userupdate->name = $request->editname;
        $userupdate->surname = $request->editsurname;
        $userupdate->login = $request->editlogin;
        $userupdate->email = $request->editemail;
        $userupdate->struktura = $request->editstruktura;
        $userupdate->usertype = $request->editusertype;
        $userupdate->email = $request->editemail;
        $userupdate->pilseta = $request->editpilseta;
        $userupdate->iela = $request->editiela;
        $userupdate->house = $request->edithouse;
        $userupdate->room=$request->editroom;
        $userupdate->phone1 = $request->editphone1;
        $userupdate->phone2 = $request->editphone2;
        $userupdate->save();
        return response('Record changed');
    }

    public function show(Request $request)
    {
        $user = User::find($request->id);
        return response($user);
    }

    public function destroy(Request $request)
    {
        User::destroy($request->id);
        return response(['message' => 'Killed']);
    }

    public function GetUserData()
    {
        $users = User::all();
        $usertypes = Usertyp::all();

        return response($users);
    }

    // [ "users", [], "types", [] ]
    // { users: [], types: [] }

    public function GeneratePassword()
    {
        $hashed_random_password = str_random(16);
        return response($hashed_random_password);
    }

    public function changePassword(Request $request)
    {

        $user = User::find($request->id);
        $newpassword = str_random(16);
        $user->password = bcrypt($newpassword);
        $user->save();
        return response(['message' => 'Password changed', 'new_password' => $newpassword]);
    }
}
