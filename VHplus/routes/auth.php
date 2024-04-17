<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Google\Service\Calendar as Google_Service_Calendar;


Route::group(['middleware' => 'web'], function () {
    Route::post('/auth/login', [AuthController::class, 'login'])->name('auth/login');

    Route::post('password/update', [AuthController::class, 'resetPassword'])->name('password.update');
    Route::post('auth/resetpassword', [AuthController::class, 'AuthResetPassword'])->name('password.email');
    Route::get('/auth/{provider}/redirect', function ($provider) {

        return Socialite::driver($provider)
        ->scopes([
            Google_Service_Calendar::CALENDAR, 
            Google_Service_Calendar::CALENDAR_READONLY,
        ])
        ->with(['access_type' => 'offline', 'prompt' => 'consent'])
        ->redirect();
    });

    Route::get('/auth/{provider}/callback', function ($provider) {
        try {
            $SocialiteUser = Socialite::driver($provider)->user();

            $user = User::firstOrCreate(
                [
                    'provider' => $provider,
                    'provider_id' => $SocialiteUser->getId(),
                ],
                [
                    'email' => $SocialiteUser->getEmail(),
                    'name' => $SocialiteUser->getName(),
                    'password' => bcrypt('randompassword'),
                ]
            );

            $user->token = $SocialiteUser->token;
            $user->refreshToken = $SocialiteUser->refreshToken ?? $user->refreshToken; 
            $user->save();
            // Log the user in
            Auth::login($user, true); // The 'true' argument here ensures the user is remembered

            return redirect()->route('hospital/index');
        } catch (\Exception $e) {

            return redirect()->route('auth/login')->withErrors('Error: ' . $e->getMessage());
        }

       
    });
});
