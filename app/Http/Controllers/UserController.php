<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserController extends Controller
{
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        return redirect()->route('home')->with('logout-success', 'Berhasil logout');
    }

    public function login(Request $request)
    {
        if (session('loggedin', FALSE)) return redirect()->route('home')->with('ilegal', 'Already Logged in');
        $remember = $request->cookie('remember');
        if ($remember) {
            $data = [
                "email" => $request->cookie('email'),
                "password" => $request->cookie('password'),
                "remember" => $remember
            ];
        } else {
            $data = [
                "remember" => FALSE
            ];
        }
        return view('login', compact('data'));
    }

    public function register()
    {
        return view('register');
    }

    public function home()
    {
        return view('home');
    }

    public function registerScript(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'password1' => 'required|same:password',
            'username' => 'required',
            'hp' => 'required'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->username = $request->username;
        $user->phone_number = $request->hp;
        $user->role = 'user';
        $user->save();

        return redirect()->route('login')->with(['berhasil' => 'Berhasil Daftar, Silahkan login']);
    }

    public function loginScript(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        try {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                session(['loggedin' => TRUE]);
                session(['uid' => $user->id]);
                session(['name' => $user->name]);
                session(['email' => $user->email]);
                session(['role' => $user->role]);
                if ($request->remember) {
                    Cookie::queue('email', $user->email, 1440);
                    Cookie::queue('password', $request->password, 1440);
                    Cookie::queue('remember', TRUE, 1440);
                } else {
                    Cookie::queue('email', "", 0);
                    Cookie::queue('password', "", 0);
                    Cookie::queue('remember', "", 0);
                }
                if ($user->role == "admin") {
                    return redirect()->route('adm.dashboard');
                } else {
                    return redirect()->route('home');
                }
            } else {
                return redirect()->route('login')->with(['error' => 'Email atau password salah!']);
            }
        } catch (QueryException $e) {
            // return response()->json([
            //     'message' => "Failed " . $e->errorInfo
            // ]);
            return redirect()->route('login')->with(['error' => $e->errorInfo]);
        }
    }
}
