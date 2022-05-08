<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function loginEjecutar(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if(!\Auth::attempt($credentials)){
            return redirect()
                ->route('auth.login.form')
                ->withInput()
                ->with('message.error', 'Las credenciales ingresadas no coinciden con las registradas en el sitio.');
        }

        return redirect()
            ->route('noticias.index')
            ->with('message.success', 'La sesión ha sido iniciada con éxito.');
    }

    public function logout(){
        Auth::logout();
        return redirect()
            ->route('auth.login.form')
            ->with('message.success', 'La sesión ha sido finalizada con éxito');
    }
}
