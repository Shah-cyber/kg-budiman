<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

	public function authenticate(Request $request)
	{
		$credentials = $request->validate([
			'email' => 'required|email',
			'password' => 'required|string',
		]);

		if (Auth::attempt($credentials, $request->boolean('remember'))) {
			$request->session()->regenerate();
			return redirect()->intended(route('admin.utama'));
		}

		return back()->withErrors([
			'email' => 'Kelayakan tidak sah.',
		])->onlyInput('email');
	}

    public function logout(Request $request)
    {
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect()->route('login')->with('success', 'Anda telah log keluar.');
    }
}
