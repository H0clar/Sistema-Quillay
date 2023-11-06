<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    /**
     * Redirect the user to the Google Workspace authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google Workspace.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // Check if the user with this Google Workspace email already exists in your database
        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            // Create a new user with the Google Workspace email and other information
            $newUser = new User();
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->password = bcrypt(str_random(8)); // You might want to change this
            $newUser->save();

            Auth::login($newUser);
        }

        return redirect()->route('home'); // Redirect to the home page after login
    }

    /**
     * Display the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('Login.login'); // Adjust the login view as needed
    }

    /**
     * Log the user out and redirect them to the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
