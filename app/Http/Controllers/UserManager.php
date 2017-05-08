<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserManager extends Controller
{
    public function index()
    {
        return view('user/login');
    }
    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect('/user');
        }
    }
    public function user(){

        $user=User::get();
        return view('user/user',['user'=>$user]);
    }
}
