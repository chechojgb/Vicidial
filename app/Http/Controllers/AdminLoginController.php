<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Validar los campos
        $request->validate([
            'user' => 'required|string',
            'password' => 'required|string',
        ]);

        // Buscar el usuario en la tabla "vicidial_users"
        $user = DB::table('vicidial_users')
            ->where('user', $request->user)
            ->first();

        // Verificar si el usuario existe y la contraseña coincide
        if ($user && $request->password === $user->pass) {
            session(['admin_user' => $user->user]);
        
            // Redirigir al componente Livewire principal del Dashboard
            return view('admin.Dashboard-Admin');
        }

        // Si falla
        return back()->withErrors(['message' => 'Usuario o contraseña incorrectos']);
    }

    public function logout()
    {
        session()->forget('admin_user');
        return redirect()->route('admin.login');
    }
}
