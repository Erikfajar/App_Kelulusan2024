<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // MENAMPILKAN LOGIN
    public function index()
    {
        return view('auth.login2');
    }

    // PROSES AUTHENTICATE LOGIN
    public function authenticate(Request $request)
    {
        $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validasi)) {
            return redirect()->intended('/admin/dashboard')->with('success','Login Berhasil!!');
        }

        return back()->with('error', 'Login gagal');
    }

    // PROSES LOGOUT
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil Logout');
    }
}
