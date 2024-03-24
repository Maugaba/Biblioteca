<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(request $request)
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return response()->json(['success' => 'Usuario autenticado'], 200);
        }
        else {
            return response()->json(['error' => 'Usuario o contraseña incorrecta'], 401);
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('loginForm');
    }

    public function register()
    {
        $Data = $_POST['data'];
        $usuario = new Usuarios();
        $usuario->username = $Data['username'];
        $usuario->password = bcrypt($Data['password']);
        $usuario->save();

        return response()->json(['success' => 'Usuario creado correctamente'], 200);
    }
}