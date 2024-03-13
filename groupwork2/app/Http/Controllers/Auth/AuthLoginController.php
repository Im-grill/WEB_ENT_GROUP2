<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    // Login
    public function login_view()
    {
        return view('auth.login');
    }

    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credenticals = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credenticals)) { // phia su dung password ma hoa moi co the su dung attempt
            if (Auth::guard('web')->user()->role == 'admin') {
                return redirect()->route('homepage');
            }
        }

        return redirect()->route('login');
            
    }

    // Logout
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }

    // Register
    public function register_view()
    {
        return view('auth.register');
    }
}
