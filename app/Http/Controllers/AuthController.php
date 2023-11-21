<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'As credenciais informadas não conferem',
        ])->onlyInput('email');
    }

    public function register(Request $request)
    {

    }

    public function logout()
    {
        if (Auth::logout()) {
            return redirect('login');
        }
        return redirect()->back();
    }
}
