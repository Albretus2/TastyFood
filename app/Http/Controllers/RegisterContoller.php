<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterContoller extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedDate = $request->validate([
            'name' => 'required|max:255|min:5|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:8'
        ]);

        $validatedDate['password'] =  Hash::make($validatedDate['password']);

        User::create($validatedDate);

        return redirect('/login')->with('success', 'Register successfull, please Log in');
    }
}
