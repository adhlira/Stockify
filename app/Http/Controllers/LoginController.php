<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function LoginPage()
    {
        return view('login');
    }

    public function Login(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validateData)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'Login Successfull');
        }

        return back()->withErrors([
            'password' => 'Username Or Password Incorrect',
        ]);
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('')->with('success', 'You have Logged Out');
    }
}
