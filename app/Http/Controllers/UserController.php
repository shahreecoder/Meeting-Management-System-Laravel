<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loadRegister(){
        return view('register');
    }
    public function userRegister(Request $request){
        $request->validate([
            'name' =>"string|required|min:1",
            'email' =>"string|required|email|max:100|unique:users",
            'password'=>"string|required|min:6|confirmed"
        ]);
    }
}
