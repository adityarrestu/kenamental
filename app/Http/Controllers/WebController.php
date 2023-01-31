<?php

namespace App\Http\Controllers;

use App\Models\Konseling;
use App\Models\Psikolog;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class WebController extends Controller
{
    // Show Home
    public function index() {
        return view('home', [
            'psikologs' => Psikolog::all(),
            'testimonis' => Testimoni::all(),
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
        return view('dashboard.index', [
            'psikologs' => Psikolog::all(),
            'testimonis' => Testimoni::all(),
            'konselings' => Konseling::all(),
        ]);
    }
}
