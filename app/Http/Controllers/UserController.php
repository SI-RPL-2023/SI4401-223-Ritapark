<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserController extends Controller
{

    

    public function login(Request $request){
        if (session('loggedin',FALSE)) return redirect()->route('home')->with('ilegal','Already Logged in');
        $remember = $request->cookie('remember');
        if($remember){
            $data = [
                "email" => $request->cookie('email'),
                "password" => $request->cookie('password'),
                "remember" => $remember
            ];
        }else{
            $data = [
                "remember" => FALSE
            ];
        }
        return view('login',compact('data'));
    }

    public function register(){
        return view('register');
    }

    public function welcome(){
        return view('welcome');
    }

    public function registerScript(Request $request){
        $u = DB::table('users')->where('email',$request->email)->first();
        if($u) return redirect()->route('daftar')->with('email-exist','email must be unique');
        if($request->password != $request->password1) return redirect()->route('register')->with('password-not-match','please try again');
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->username = $request->username;
        $user->phone_number = $request->hp;
        $user->role = 'USER';
        $user->save();
        return redirect()->route('login');
    }

    public function loginScript(Request $request){
        $u = DB::table('users')->where('email',$request->email)->first();
        if ($u && $u->password == $request->password) {
            session(['loggedin' => TRUE]);
            session(['uid' => $u->id]);
            session(['name' => $u->name]);
            session(['email' => $u->email]);
            session(['role' => $u->role]);
            if($request->remember){
                Cookie::queue('email',$u->email,1440);
                Cookie::queue('password',$u->password,1440);
                Cookie::queue('remember',TRUE,1440);
            }else{
                Cookie::queue('email',"",0);
                Cookie::queue('password',"",0);
                Cookie::queue('remember',"",0);
            }
            return redirect()->route('welcome')->with('login-success','Berhasil login');
        }else{
            return redirect()->route('login')->with('login-failed','Password atau email salah');
        }
    }
    
}
