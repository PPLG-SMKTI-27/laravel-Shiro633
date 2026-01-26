<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Memproses login
    public function processLogin(Request $request)
    {
        // Mengambil data email dan password dari form
        $email = $request->input('email');
        $password = $request->input('password');

        // Validasi email dan password yang benar
        if ($email === 'admin@sekolah.id' && $password === '123456') {
            // Set session login
            session(['logged_in' => true, 'user_email' => $email]);
            // Login berhasil
            return redirect('/')->with('success', 'Login berhasil');
        } else {
            // Login gagal
            return redirect('/login')->with('error', 'Email atau password salah');
        }
    }

    // Logout
    public function logout()
    {
        session()->forget('logged_in');
        session()->forget('user_email');
        return redirect('/')->with('success', 'Logout berhasil');
    }
}
