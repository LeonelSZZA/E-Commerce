<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user_google = Socialite::driver('google')->stateless()->user();

        $user = User::updateOrCreate([
            'google_id' => $user_google->id,
        ], [
            'name' => $user_google->name,
            'email' => $user_google->email,
        ]);

        Auth::login($user);

        return redirect('/home');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user_facebook = Socialite::driver('facebook')->stateless()->user();

        $user = User::updateOrCreate([
            'facebook_id' => $user_facebook->getId(),
        ], [
            'name' => $user_facebook->getName(),
            'email' => $user_facebook->getEmail(),
        ]);

        Auth::login($user);

        return redirect('/home');
    }
}
