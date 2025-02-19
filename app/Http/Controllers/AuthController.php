<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth/connexion');
    }

    public function inscret()
    {
        return view('auth/inscription');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $role_id = Role::where('id', 'utilisateur')->firt();

        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'role_id' => $role_id,
        ]);
        return redirect()->route('auth.connexion')->with('success', 'Utilisateur créé avec succès');
    }
}
