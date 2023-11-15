<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
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
        $user = Socialite::driver('google')->user();

        // Buscar un usuario existente por correo electrónico
        $existingUser = Usuario::where('CorreoElectronico', $user->getEmail())->first();

        if ($existingUser) {
            // Si el usuario ya existe, autentica al usuario existente
            Auth::login($existingUser);
        } else {
            // Si el usuario no existe, crea un nuevo usuario
            $newUser = Usuario::create([
                'NombreUsuario' => $user->getName(),
                'CorreoElectronico' => $user->getEmail(),
                'Contrasena' => null, // Puedes ajustar según tus requisitos
            ]);

            Auth::login($newUser);
        }

        // Guardar información adicional en la sesión
        session(['user_info' => [
            'nombre' => Auth::user()->NombreUsuario,
            'apellido' => Auth::user()->ApellidoUsuario,
            'rol' => Auth::user()->rol,  
        ]]);

        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $user = Usuario::where('CorreoElectronico', $request->input('CorreoElectronico'))->first();

            if ($user && Hash::check($request->input('Contrasena'), $user->Contrasena)) {
                // Contraseña válida, procede con la autenticación
                Auth::login($user);

                // Obtener el nombre del tipo de usuario
                $tipoUsuario = $user->tipoUsuario->Tipo;

                // Establece la información del usuario en la sesión
                session(['user_info' => [
                    'nombreUsuario' => $user->NombreUsuario,
                    'apellidoUsuario' => $user->ApellidoUsuario,
                    'tipoUsuario' => $tipoUsuario,
                ]]);

                return redirect()->route('home');
            } else {
                // Contraseña incorrecta, redirige al formulario de inicio de sesión con un mensaje de error
                return redirect()->route('login')->withErrors(['message' => 'Credenciales incorrectas']);
            }
        }

        // Lógica para mostrar la vista de inicio de sesión para solicitudes GET
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



    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('home');
    }


}
