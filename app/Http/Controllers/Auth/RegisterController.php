<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    protected $redirectTo = '/main';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        print_r($data);
        return Validator::make($data, [
            'name' => 'required|string|max:255',
         'surname' => 'required|string|max:255',
    'struktura' => 'required|string|max:255',
            'usertype'=>'required',
     'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
       'pilseta' => 'required|string|max:255',
          'iela' => 'required|string|max:255|alpha_num',
      'house' => 'required|string|max:3',
         'room' => 'required|string|max:3',
         'phone1' => 'required|string|max:8|min:8',
      'phone2' => 'required|string|max:8|min:8',
        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


        return User::create([
            'name' => $data['name'],
        // 'surname'=>$data['surname'],
            'login'=>$data['login'],
      //     'struktura'=>$data['struktura'],
     //     'email' => $data['email'],
            'usertype'=>$data['usertype'],
     //     'pilseta'=>$data['pilseta'],
    //      'iela'=>$data['iela'],
   //      'house'=>$data['house'],
   //        'room'=>$data['room'],
   //        'phone1'=>$data['phone1'],
   //        'phone2'=>$data['phone2'],
            'password' => bcrypt($data['password'])

        ]);
    }
}
