<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use Flash;

class UsersController extends Controller
{
    public function profile() {
        $user = Auth::user();
        //dd($user);
        $vac = compact('user', $user);
        return view('/profile', $vac);
    }



    public function update(Request $request) {
        /**
         * Validate request/input 
         **/
        //dd($request);

        
        $usuario = User::find(Auth::User()->id);
        // if(empty($usuario)){
        //    Flash::error('mensaje error');
        //    return redirect()->back();
        // }
       // $input = $request->input();

       $update = $request->filter(function($value, $key) {
        return  $value != null;
    });

        dd($update);
        $update= [];
        
       /*  if($request->name !== null){
            $usuario->name = $request->name;
        } 
        if($request->lastName !== null){
            $usuario->lastName = $request->lastName;
        } 
        if($request->gender !== null){
            $usuario->gender = $request->gender;
        } 
        if($request->email !== null && $request->email !== $usuario->email){
            $usuario->email = $request->email;
        }
        if(($request->pass2 === $request->pass3) && $request->pass2!==null){
            $usuario->email = $request->email;
        } */
        //  else {
        //     $errores->pass = "Las contraseñas nuevas no coinciden.";
        // }
       /*  foreach ($input as $key => $value) {
            if ($value !==NULL){
                $update[$key]=$value;
            }
        *}*/

        //dd($usuario);
        $rules = [
            'name' => 'required|string|max:45',
            'lastName' => 'string|max:45',
            'gender' => 'string|max:45',
            'email' => 'string|email|max:255|unique:users',
            'pass' => 'required|string|min:6|confirmed',
            'pass2' => 'sometimes|string|min:6',
            'pass3' => 'sometimes|string|min:6',
        ];
  
        $messages = [
          'required' => ':attribute es obligatorio.',
          'string' => ':attribute debe ser una cadena de texto.',
          'max' => 'El campo :attribute no debe superar :max',
          'min' => 'El campo :attribute deber tener al menos :min caracteres.',
          'confirmed' => ':attribute no coinciden',
  
        ];
        //dd($request);
        //$validacion = Validator::make($update, $rules, $messages);
        //dd($validacion);
        $this->validate($request, $rules, $messages);
        dd($errors->all());
        //$chan = $validacion->all(); if para sacar los null

        if($request->name !== NULL){
            $usuario->name = $request->name;
        } 
        if($request->lastName !== NULL){
            $usuario->lastName = $request->lastName;
        } 
        if($request->gender !== NULL){
            $usuario->gender = $request->gender;
        } 
        if($request->email !== NULL && $request->email !== $usuario->email){
            $usuario->email = $request->email;
        }
        if(($request->pass2 === $request->pass3) && $request->pass2!==NULL){
            $usuario->email = $request->email;
        } /* else {
            $errores->pass = "Las contraseñas nuevas no coinciden.";
        } */

        //dd($usuario);        
        $usuario->save();

        //dd($usuario);
        Flash::success('Perfil actualizado con éxito.');
        return "salio medio bien";
        //dd ($usuario);
    }
        
}
