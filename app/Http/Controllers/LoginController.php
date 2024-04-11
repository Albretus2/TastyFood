<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        $validateData = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($validateData)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'Login Faild !!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');
    }
}
