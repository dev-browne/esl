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

    public function Login (Request $request)
    {
       $validated = $request->validate([
        'name' => 'required',
        'password' => 'required',
      ]);

      if (Auth::attempt($validated)) {
        $request->session()->regenerate();

        return redirect()->route('welcome'); 
    }
      throw ValidationException::withMessages([
        'credentials' => 'Sorry, incorrect credentials',
      ]);
    }
    public function logout(Request $request)
  {
      Auth::logout();

      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return redirect()->route('show.login');
  }
}
