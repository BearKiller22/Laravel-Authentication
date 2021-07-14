<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserAuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }   
    function create(Request $request){
        $request->validate([
            'password'=>'required|min:5|max:12'
        ]);
        $user = new User;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->test = $request->username;
        $user->save();
        $query = $user->save();
        if($query){
            return back()->with("Succsess. Account Created");
        }
        else{
            return back()->with("Fail. Somerthing Went Wrong");
        }
    }

    function check(Request $request){
        $user = User::where('username','=',$request->username)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                return ('admin.profile');
            }
            else{
                return ("Password is incorect");
            }
        }
        else{
            return ("Account Not Found");
        }
    }
    function profile(){
        return view('auth.profile');
    }
}
