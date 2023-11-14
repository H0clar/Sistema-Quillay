<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            // Crear un nuevo usuario si no existe
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => null,
            ]);

            Auth::login($newUser);
        }

        return redirect()->route('home');
    }

    public function login()
    {
        return view('Login.login'); // Asegúrate de que la vista 'auth.login' esté correctamente configurada
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
