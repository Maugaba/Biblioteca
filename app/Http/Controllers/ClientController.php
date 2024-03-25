<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Cliente;


class ClientController extends Controller
{
    public function index(Request $request)
    {
        return view('Client.index');
    }


    public function getAll(Request $request) {
        $state = $request->input('state');
        $clientes = Cliente::where('estado', $state)->get();
        $data = [];
    
        foreach ($clientes as $cliente) {
            $model = [
                "id" => $cliente->id,
                "nombreCompleto" => $cliente->nombreCompleto,
                "estado" => $cliente->estado,
                "created_at" => $cliente->created_at,
                "updated_at" => $cliente->updated_at,
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
    
    public function create()
    {
        return view('Client.create');
    }

    public function store(Request $request)
    {
        //logica para almacenar un nuevo cliente en la base de datos
    }

    public function edit($id)
    {
        //logica para obtener y mostrar el formulario de edición de un cliente específico
        $cliente = Cliente::find($id);
        return view('Client.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        //logica para actualizar un cliente específico en la base de datos
    }

    public function change($id)
    {
        //logica para cambiar el estado de un cliente específico (activo/inactivo)
    }
}
