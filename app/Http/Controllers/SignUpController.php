<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function SignUpPage()
    {
        return view('sign_up');
    }

    public function AddUser(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string|unique:users,username',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|min:8|max:32'
        ]);

        $user = new User();
        $user->name = $validateData['name'];
        $user->username = $validateData['username'];
        $user->email = $validateData['email'];
        $user->password = $validateData['password'];
        $user->save();

        return redirect('')->with('success', 'Sign Up Successfully');
    }
}
