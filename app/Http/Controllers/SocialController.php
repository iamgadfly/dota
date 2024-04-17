<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $u = User::firstOrCreate([
            'steam_id' => $user->id,
        ], [
            'name'     => $user->getName(),
            'nickname' => $user->getNickname(),
            'email'    => $user->getEmail(),
            'avatar'   => $user->getAvatar(),
            'steam_id' => $user->getId(),
        ]);

        return $this->createNewToken(
            Auth::login($u)
        );
    }

    /**
     * Get the token array structure.
     *
     * @param  string  $token
     */
    public function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            // 'expires_in'   => auth()->factory()->getTTL() * 60,
            'user'         => auth()->user(),
        ]);
    }


}
