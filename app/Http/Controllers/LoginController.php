<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(User $user, Request $request)
    {
        $user = User::where('user_id', $request->user_id)->firstOrFail();

        $credentials['user_id'] = $user->user_id;
        $credentials['password'] = $user->userLogin->password;

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/home');
        }
    }
}
