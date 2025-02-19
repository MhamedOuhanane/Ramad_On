<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        // dd(Auth::user());
        return view('auth/login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (Auth::attempt($validated)) {
            Auth::attempt($validated);
            return redirect("/");
        } else {
            return back()->withErrors([
                'erreur' => 'Email ou mot de passe incorrecte'
            ]);
        }
        
    }
}
