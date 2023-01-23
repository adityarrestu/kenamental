<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show Register Form
    public function register()
    {
        return view('auth.register');
    }

    // Create/Store New User
    public function create(Request $request)
    {
        $formFields = $request->validate([
            'name'=> 'required',
            'email'=> ['required', 'email'],
            'whatsapp'=> 'required',
            'password'=> 'required'
        ]);

        //hash
        $formFields['password'] = bcrypt($formFields['password']);

        //createuser
        $user = User::create($formFields);

        //login
        auth()->login($user);

        return redirect('/')->with('message','Akun berhasil dibuat');
    }

    // Show Login Form
    public function login()
    {
        return view('auth.login');
    }

    // Authenticate User
    public function auth(Request $request)
    {
        $formFields = $request->validate([
            'email'=> ['required', 'email'],
            'password'=> 'required',
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Berhasil Login');

        }

        return back()->withErrors(['email'=>'Email atau password tidak valid'])->onlyInput('email');
    }

    // User logout
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','Berhasil Logout');
    }
}
