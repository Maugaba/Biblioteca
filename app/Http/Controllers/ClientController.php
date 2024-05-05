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
                "dpi" => $cliente->dpi,
                "telefono" => $cliente->telefono,
                "correo" => $cliente->correo,
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
        try {
            $client = new Cliente();
            $client->nombreCompleto = $request->input('clientsName');
            $client->dpi = $request->input('dpi');
            $client->telefono = $request->input('phone');
            $client->correo = $request->input('email');

            $client->save();
            return response()->json(['success' => 'Client saved successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error saving client']);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $client = Cliente::find($id);
            $client->nombreCompleto = $request->input('clientsName');
            $client->dpi = $request->input('dpi');
            $client->telefono = $request->input('phone');
            $client->correo = $request->input('email');
            $client->save();
            return response()->json(['success' => 'Datos del cliente Actualizado correctamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar datos del cliente']);
        }
    }
    
    public function edit($id){
        $Client = Cliente::find($id);
        $ClientData = [
            "id" => $Client->id,
            "name" => $Client->nombreCompleto,
            "dpi" => $Client->dpi,
            "phone" => $Client->telefono,
            "email" => $Client->correo
        ];
        return view('Client.edit', compact('ClientData'));
    }

    public function change($id)
    {
        //logica para cambiar el estado de un cliente específico (activo/inactivo)
    }
}
