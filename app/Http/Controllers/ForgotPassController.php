<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;

class ForgotPassController extends Controller
{
    public function forgot(Request $request)
    {
        return view('forgotpass');
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
