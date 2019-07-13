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

    public function update_avatar(Request $request){
        // Logic for user upload of avatar
        if($request->hasFile('foto_perfil')){
            $avatar = $request->file('foto_perfil');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->resize(300, 300)->save( public_path('/storage/foto_perfil/' . $filename ) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        dd($user);
        return view('profile', ['user' => Auth::user()] );
    }

    public function update(Request $request) {
        /**
         * Validate request/input 
         **/
        //dd($request);
        //logic for user upload of avatar
        if($request->hasFile('foto_perfil')){
            //dd($request->foto_perfil);
            $avatar = $request->foto_perfil->store('/public/foto_perfil');
            $fileName = basename($avatar);
            //dd($avatar,$fileName);
            $user = Auth::user();
            $user->foto_perfil = $fileName;
            $user->save();
            //dd($user);
        }else {
            $request->foto_perfil='custom.png';
          }

        //dd($user);
        
        //if ($request->)
        $usuario = User::find(Auth::User()->id);

        //dd($update);
        $update= [];

        //dd($usuario);
        $rules = [
            'name' => 'nullable|string|max:45',
            'lastName' => 'nullable|string|max:45',
            'gender' => 'nullable|string|max:45',
            'email' => 'nullable|string|email|max:255|unique:users,email,'.$usuario->id.'id',
            'email2' => 'nullable|string|email|max:255|unique:users,email,'.$usuario->id.'id',
            'pass' => 'required|string|min:6',
            'pass2' => 'sometimes|nullable|string|min:6|confirmed',
            'pass3' => 'sometimes|nullable|string|min:6|confirmed',
        ];
  
        $messages = [
          'required' => 'El campo es obligatorio.',
          'string' => ':attribute debe ser una cadena de texto.',
          'max' => 'El campo :attribute no debe superar :max',
          'min' => 'El campo :attribute deber tener al menos :min caracteres.',
          'confirmed' => ':attribute no coinciden',
  
        ];
        //dd($request);
        //$validacion = Validator::make($update, $rules, $messages);
        //dd($validacion);
        $this->validate($request, $rules, $messages);
        //dd($errors->all());

        if($request->name !== null){
            $usuario->name = $request->name;
        } 
        if($request->lastName !== null){
            $usuario->lastName = $request->lastName;
        } 
        if($request->gender !== null){
            $usuario->gender = $request->gender;
        } 
        if($request->email !== null && $request->email !== $usuario->email && $request->email===$request->email2){
            $usuario->email = $request->email;
        }
        if(($request->pass2 === $request->pass3) && $request->pass2!== null){
            $usuario->email = bcrypt($request->email);
        } 

        //dd($usuario);     
        $usuario->save();

        //dd($usuario);
        Flash::success('Perfil actualizado con éxito.');
        return redirect(route('home'));
        //dd ($usuario);
    }
        
}
