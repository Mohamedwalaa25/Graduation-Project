<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Traits\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    use Response;
    public function redirect()
    {
        $url = Socialite::driver('google')
            ->stateless()
            ->redirect()
            ->getTargetUrl();

        return $this->sendResponse(['url' => $url], 'Redirecting to Google for authentication');
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {
            $user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'password' => bcrypt(str()->random(16)),
            ]);
        }

        $token = $user->createToken('google-token')->plainTextToken;

        return $this->sendResponse([
            'user' => $user,
            'token' => $token,
        ], 'User authenticated successfully');

        //  return redirect()->away("myapp://callback?token=$token");

    }
}
