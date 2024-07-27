<?php

namespace App\Http\Controllers\Auth\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        return view('auth.dashboard.settings.index');
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'string|email|max:255',
            'current_password' => 'string|min:8|max:255',
            'password' => 'string|min:8|max:255',
        ]);

        if (! Hash::check(
            $request->current_password,
            $request->user()->password
        )) {
            return redirect()->back()->with('error', 'Password does not match.');
        }

        $request->user()->password = Hash::make($request->password);

        $request->user()->save();

        return redirect()
            ->back()
            ->with('success', 'Password succesfully changed.');
    }
}
