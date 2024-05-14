<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCredentialsController extends Controller
{
    public function login(Request $request){
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->route('user.index', Auth::id());
        }
        return redirect('/login');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}
