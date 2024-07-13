<?php

namespace App\Packages\Fortify;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;

class LoadFortify
{
    public static function login(): void
    {
        Fortify::loginView(function () {
            return view('auth.login');
        });
    }

    public static function authenticate(): void
    {
        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)->first();

            if ($user &&
                Hash::check($request->password, $user->password)) {
                return $user;
            }
        });
    }
}
