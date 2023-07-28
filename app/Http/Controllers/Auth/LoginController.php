<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers; // Wajib

class LoginController extends Controller
{

    // use AuthenticatesUsers;

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('employee')->attempt($credentials)) {
            $request->session()->regenerateToken();

            return redirect()->route('fulan.index');
        }
    }

    public function logout(Request $request)
    {
        if(Auth::guard('employee')->check()) {
            Auth::guard('employee')->logout();
        } elseif(Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
        }

        redirect()->route('login');
    }
}
