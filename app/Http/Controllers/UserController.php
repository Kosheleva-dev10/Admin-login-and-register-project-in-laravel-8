<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Session;
use Illuminate\Support\facades\DB;

class UserController extends Controller
{
    //
    function login(Request $req){
        $user = UserModel::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return "Username or password is not matched";
        }else{
            $req->session()->put('user',$user);
            return redirect('/welcome');
        }
    }
    function register(Request $req){
        $user = new UserModel;
        $user->username=$req->username;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/');
    }
}
