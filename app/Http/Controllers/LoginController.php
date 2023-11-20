<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    protected $redirectTo = '/home';

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            // Obtener el token de acceso del usuario validado por Google
            $accessToken = $user->token;

            // Verificar si el usuario ya existe en la base de datos
            $existingUser = Usuario::where('CorreoElectronico', $user->getEmail())->first();

            if ($existingUser) {
                Auth::login($existingUser);
            } else {
                // Crear un nuevo usuario si no existe
                $newUser = Usuario::create([
                    'NombreUsuario' => $user->getName(),
                    'CorreoElectronico' => $user->getEmail(),
                    'Contrasena' => null, // Puedes ajustar según tus requisitos
                ]);

                Auth::login($newUser);
            }

            return redirect()->route('home');
        } catch (\Exception $e) {
            return redirect()->route('login');
        }

        $user->token;

        $user->refreshToken; // Para obtener el token de actualización


    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('CorreoElectronico', 'Contrasena');

            // Verificar si el usuario existe en la base de datos
            $user = Usuario::where('CorreoElectronico', $credentials['CorreoElectronico'])->first();

            if ($user !== null) {
                // Verificar si es un usuario de Google
                if ($user->Contrasena === null || $user->Contrasena === 'google_user') {
                    // Realizar la lógica de autenticación para usuarios de Google
                    Auth::login($user);
                } else {
                    // Realizar la lógica de autenticación para usuarios con contraseña cifrada
                    if (Hash::check($credentials['Contrasena'], $user->Contrasena)) {
                        Auth::login($user);
                    } else {
                        throw ValidationException::withMessages(['message' => 'Correo electrónico o contraseña incorrectos']);
                    }
                }

                $userInfo = [
                    'nombreUsuario' => $user->NombreUsuario,
                    'apellidoUsuario' => $user->ApellidoUsuario,
                    'tipoUsuario' => $user->tipoUsuario->Tipo,
                ];

                session(['user_info' => $userInfo]);

                return redirect()->route('home');
            } else {
                throw ValidationException::withMessages(['message' => 'Correo electrónico o contraseña incorrectos']);
            }
        }

        return view('Login.login');
    }



    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function showLoginForm()
    {
        return view('Login.login');
    }



    public function renderDashboard()
    {
        $userInfo = session('user_info');

        // Verificar el tipo de usuario
        if ($userInfo['tipoUsuario'] === 'Profesor') {
            return View::make('dashboard.profesor');
        } else {
            return View::make('dashboard.default');
        }
    }
}
