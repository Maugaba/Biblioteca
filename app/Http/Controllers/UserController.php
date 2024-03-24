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

    
    public function getAll() {
        $clientes = Usuarios::all();
        return $clientes;
    }
    
}