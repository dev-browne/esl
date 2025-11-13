<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister ()
    {
        return view ('auth.register');
    }

    public function showLogin ()
    {
        return view ('auth.login');
    }

    public function Register (Request $request)
    {
       $validated = $request->validate([
        'name' => 'required|string|unique:users',
        'password' => 'required|min:8|confirmed',
        'email' => 'required|string|unique:users'
       ]);

       $user = User::create($validated);

       Auth::login($user);

       return redirect()->route('welcome');
    }

    public function Login ()
    {
     
    }
}
