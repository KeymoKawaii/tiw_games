<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageAccess extends Controller{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function checkAuthInfo(Request $request)
    {
        $info = $request->only('email', 'password');
        if (Auth::attempt($info)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back();
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
