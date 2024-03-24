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


    public function getAll() {
        $clientes = Cliente::all();
        return $clientes;
    }
    
    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        //logica para almacenar un nuevo cliente en la base de datos
    }

    public function edit($id)
    {
        //logica para obtener y mostrar el formulario de edición de un cliente específico
        $cliente = Cliente::find($id);
        return view('clients.edit', compact('cliente'));
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
