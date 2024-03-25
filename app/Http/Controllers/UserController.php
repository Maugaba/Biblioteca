<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuarios;

class UserController extends Controller
{
    public function index(request $request)
    {
        return view('User.index');
    }

    
    public function getAll(Request $request) {
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
    
}