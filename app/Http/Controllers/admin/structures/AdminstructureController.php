<?php

namespace App\Http\Controllers\admin\structures;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\structure;
use App\User;


class AdminstructureController extends Controller
{
    public function index()
    {

return view ('admin.structures.structures');
    }

    public function store(Request $request)
    {
     //   print_r($request->all());
      $this->validate($request,[
            'structurename'=>'required',
          'structureinfo'=>'required'
        ]);
      Structure::Create([
            'name'=>$request['structurename'],
            'title'=>$request['structureinfo'],
        ]);
       return response($request);
    }

    public function GetStructures() {
$structures=structure::all();
return response ($structures);
    }
    public function GetStructuresCalendar() {
$structures=structure::all();
return response ($structures);
    }

    public function calendarstrukturesusers() {

    }

}
