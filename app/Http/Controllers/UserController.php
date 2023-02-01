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

            if(auth()->user()->role == 'admin') {
                return redirect('/sp/dashboard')->with('message', 'Berhasil login sebagai admin');
            } else {
                return redirect('/')->with('message', 'Berhasil Login');
            }
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

    // Show User Settings
    public function settings() {
        return view('user.settings');
    }

    // Update User Data
    public function update(Request $request, User $user) {
        $formFields = $request->validate([
            'name' => 'required',
            'whatsapp' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        //hash
        $formFields['password'] = bcrypt($formFields['password']);

        $user->update($formFields);

        return back()->with('message', 'Data akun berhasil diubah');
    }

    // Delete User
    public function destroy(User $user) {

        auth()->logout();
        $user->delete();

        return redirect('/')->with('message', 'Akun berhasil dihapus');
    }
}
