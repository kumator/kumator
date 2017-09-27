<?php

namespace App\Http\Controllers\Api\Users;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect()->intended('dashboard');
        }

        return redirect('/login')
            ->with('info', 'Invalid username or password')
            ->withInput();
    }

    public function redirectTo()
    {
        return redirect('/dashboard');
    }
}
