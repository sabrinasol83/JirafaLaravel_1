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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      $rules = [
          'name' => 'required|string|max:45',
          'lastName' => 'required|string|max:45',
          'gender' => 'required|string|max:45',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
      ];

      $messages = [
        'required' => ':attribute es obligatorio.',
        'string' => ':attribute debe ser una cadena de texto.',
        'max' => 'El campo :attribute no debe superar :max',
        'min' => 'El campo :attribute deber tener al menos :min caracteres.',
        'confirmed' => ':attribute no coinciden',
        //'unique'=>
      ];

        return Validator::make($data, $rules, $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    { 
    //Cargar Foto de Perfil:
      if (isset($data['foto_perfil'])){
        $route = $data['foto_perfil']->store('/public/foto_perfil');
        $fileName = basename($route); //función de php;
      } else {
        $fileName='custom.png';
      }
      //dd($route, $fileName);

        return User::create([           
            'name' => $data['name'],
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'password' => bcrypt($data['password']),
            'foto_perfil' => $fileName,
        ]);
    }
}
