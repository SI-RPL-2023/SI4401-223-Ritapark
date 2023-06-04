<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;


class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        $id = $request->session()->get('uid');
        $user = User::find($id);
        return view('profile', ['user' => $user]);
    }

    public function profileubah(Request $request)
    {
        $id = $request->session()->get('uid');
        $user = User::find($id);
        return view('profile-ubah', ['user' => $user]);
    }

    public function profileubahattempt(Request $request)
    {
        $id = $request->session()->get('uid');
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone');
        $user->save();

        return redirect('profile')->with('berhasil', 'Profil berhasil diubah');
    }
    
    public function resetattempt(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'password1' => 'required|same:password',
        ]);
        $id = $request->session()->get('uid');
        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('profile')->with('berhasil', 'Password berhasil diubah');
    }

    public function resetpassword(Request $request)
    {
        return view('profile-password');
    }
    
    public function forgotS(Request $request)
    {
        $email = $request->input('email');

        $user = DB::table('users')->where('email', $email)->first();

        if (!$user) {
            return redirect('forgot')->with('error', 'Email tidak terdaftar');
        }

        // Kode untuk mengirim email reset password
        $resetLink = 'Ini merupakan resetlink'; // Reset link yang dihasilkan
        $userEmail = $user; // Email asli pengguna

        // Mail::to($userEmail)->send(new ResetPasswordMail($resetLink));
        return redirect('forgot')->with('berhasil', 'Instruksi reset password telah dikirim ke email Anda');
    }
}
