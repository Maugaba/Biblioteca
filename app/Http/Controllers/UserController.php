<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(request $request)
    {
        return view('User.index');
    }

    public function getAll(Request $request)
    {
        $state = $request->input('state');
        $users = Usuarios::where('estado', $state)->get();
        $data = [];

        foreach ($users as $user) {
            $model = [
                "id" => $user->id,
                "username" => $user->username,
                "estado" => $user->estado,
                "created_at" => $user->created_at,
                "updated_at" => $user->updated_at,
                "actions" => ""
            ];
            array_push($data, $model);
        }

        $meta = [
            "page" => 1,
            "pages" => 1,
            "perpage" => 5,
            "total" => count($data)
        ];

        $response = [
            "meta" => $meta,
            "data" => $data
        ];

        return response()->json($response);
    }

    public function change(Request $request, $id)
    {
        $user = Usuarios::findOrFail($id);
        if ($user->estado === "activo") {
            $user->estado = "inactivo";
        } else {
            $user->estado = "activo";
        }
        $user->save();
        
        return response()->json(['status' => true]); 
    }
    
    public function create()
    {
        return view('User.create');
    }

    public function changePassword($id) {
        $user = Usuarios::find($id);
        return view('User.edit', compact('user'));
    }
    
    public function update(Request $request, $id) {
        // Validar la solicitud
        $request->validate([
            'password' => 'required|string|min:6', // Asegúrate de validar los datos correctamente
        ]);
    
        try {
            // Buscar al usuario por su ID
            $user = Usuarios::findOrFail($id);
    
            // Actualizar la contraseña del usuario con la nueva contraseña encriptada
            $user->password = Hash::make($request->input('password'));
    
            // Guardar los cambios en la base de datos
            $user->save();
    
            // Devolver una respuesta de éxito
            return response()->json(['success' => 'Contraseña actualizada correctamente']);
        } catch (\Exception $e) {
            // En caso de error, devolver una respuesta de error
            return response()->json(['error' => 'Error al actualizar la contraseña']);
        }
    }
}
