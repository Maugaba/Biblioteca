<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de importar el modelo User si no lo has hecho aún

class UserController extends Controller
{
    public function index(Request $request)
    {
        // Si la solicitud es AJAX, devuelve los usuarios como JSON
        if ($request->ajax()) {
            $users = User::all(); // Obtén todos los usuarios desde tu modelo
            return response()->json($users); // Devuelve los usuarios como JSON
        }
        
        // Si no es una solicitud AJAX, simplemente devuelve la vista
        return view('User.index');
    }
}
