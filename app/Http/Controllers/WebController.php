<?php

namespace App\Http\Controllers;

use App\Models\Psikolog;
use Illuminate\Http\Request;

class WebController extends Controller
{
    // Show Home
    public function index() {
        return view('home', [
            'psikologs' => Psikolog::all()
        ]);
    }

    // Show Super Login
    public function login() {
        return view('dashboard.auth.login');
    }

    // Authenticate Super User
    public function auth(Request $request) {
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

    // Show Dashboard
    public function dashboard() {
        return view('dashboard.index');
    }
}
