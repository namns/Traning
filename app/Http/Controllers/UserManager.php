<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\StoreUserEditRequest;
use Illuminate\Support\Facades\DB;

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
    public function adduser(){
        return view('user/adduser');
    }

    public function saveuser(StoreUserRequest $request){

        $username = $request->input('username');
        $pass = $request->input('password');
        $password= bcrypt($pass);
        $fullname = $request->input('fullname');
        $date= date('Y-m-d H:i:s');
        $item = array([
            "username"  => $username,
            "password" => $password,
            "fullname" => $fullname,
            "created" => $date,
        ]);
        DB::table('user')->insert($item );
        return redirect('/user');
    }
    public function deleteuser(Request $request){
        $id = $request->input('id');
        $del = User::where('id', $id)->delete();
        if ($del) {
            return response()->json([
                'status' => 'success',
                'errors' => [],
            ], 200);
        }
    }
    public function getuser(Request $request){
        $id=$request->id;
        $data=User::where('id',$id)->get();
        return view('user/get-user',['data'=>$data]);
    }
    public function edituser(StoreUserEditRequest $request){
        $id=$request->input('id');
        $username = $request->input('username');
        $fullname = $request->input('fullname');
        $date= date('Y-m-d H:i:s');
        DB::table('user')
            ->where('id', $id)
            ->update([ "username"  => $username,
                "fullname" => $fullname,
                "created" => $date,
            ]);
        return redirect('/user');
    }
}
