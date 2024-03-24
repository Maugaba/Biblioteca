<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Libros;
use App\Models\Prestamos;
use App\Models\Clientes;

class LoanController extends Controller
{
    public function index()
    {
        return view('Loan.index');
    }

    public function create()
    {
        return view('Loan.create');
    }

    public function edit($id)
    {
        return view('Loan.edit');
    }

    public function listjson(){
        $Query = $_POST['query'];
        $State = $Query['state'];
        $Prestamos = Prestamos::all()->where('estado', $State);
        $Loan = [];
        foreach ($Prestamos as $Prestamo) {
            $Libro = Libros::find($Prestamo->libroId);
            $Cliente = Clientes::find($Prestamo->clienteId);
            $Model = [
                "id" => $Prestamo->id,
                "book" => $Libro->nombreDelLibro,
                "client" => $Cliente->nombreCompleto,
                "dateLoan" => $Prestamo->fechaDePrestamo,
                "dateDevolution" => $Prestamo->fechaDeDevolucion,
                "isReturned" => $Prestamo->devuelto,
                "status" => $Prestamo->estado,
                "actions" => ""
            ];
            array_push($Loan, $Model);
        }
        $Meta =[
            "page"=> 1,
            "pages"=> 1,
            "perpage"=> 5,
            "total"=> count($Loan),
            ];
        $data = [
            "meta" => $Meta,
            "data" => $Loan
        ];
        return response()->json($data);
    }
}