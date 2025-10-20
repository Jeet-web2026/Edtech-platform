<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();
        session()->forget(['show_navbar_footer']);
        session()->invalidate();
        session()->regenerateToken();

        return back()->with('success', 'Logged out successfully!');
    }
}
