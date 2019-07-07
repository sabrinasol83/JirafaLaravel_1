<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\User;
use Auth;

class UsersController extends Controller
{
    public function profile() {
        $user = Auth::user();
        //dd($user);
        $vac = compact('user', $user);
        return view('/profile', $vac);
    }
}
