<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToSteam()
    {
        return Socialite::driver('steam')->redirect();

//        return Socialite::driver('steam')->redirect();
    }

    //Steam callback
    public function handleSteamCallback()
    {
        $user = Socialite::driver('steam')->user();
        dd($user);

//
//        $u = User::firstOrCreate([
//            'email' => $data->email,
//        ], [
//            'name'               => $data->name,
//            'password'           => bcrypt(Str::random(8)),
//            'is_register_social' => true,
//        ]);
//
//        $u->update(['name' => $data->name]);
//
//        return $this->authService->createNewToken(
//            Auth::login($u)
//        );
//
//        return $this->socialService->registerOrLoginUser(
//            Socialite::driver('google')->user()
//        );
    }
}
