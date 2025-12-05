<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
       $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(
                auth()->user()->role === 'admin'
                ? '/admin/dashboard'
                : '/'
            );

            if ($user->status === 'blocked') {
                auth()->logout();

                return back()->withErrors([
                    'email' => 'Your account has been blocked by admin.',
                ]);
            }

        }

        return back()->withErrors([
            'login_error' => 'Invalid email or password'
        ]);
    }
}

