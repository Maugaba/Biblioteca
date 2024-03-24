<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Libros;
use App\Models\Prestamos;
use App\Models\Cliente;

class LoanController extends Controller
{
    public function index()
    {
        return view('Loan.index');
    }

    public function create()
    {
        $Books = Libros::all()->where('estado', 'disponible');
        $Clients = Cliente::all();

        $BooksArray = [];
        $ClientsArray = [];
        foreach ($Books as $Book) {
            $model = [
                "id" => $Book->id,
                "name" => $Book->nombreDelLibro . " / " . $Book->autoresOEditorial,
            ];
            array_push($BooksArray, $model);
        }
        foreach ($Clients as $Client) {
            $model = [
                "id" => $Client->id,
                "name" => $Client->nombreCompleto,
            ];
            array_push($ClientsArray, $model);
        }
        return view('Loan.create', compact('BooksArray', 'ClientsArray'));
    }

    public function edit($id)
    {
        return view('Loan.edit');
    }

    public function listjson(){
        $State = $_POST['state'];
        $Prestamos = Prestamos::all()->where('estado', $State);
        $Loan = [];
        foreach ($Prestamos as $Prestamo) {
            $Libro = Libros::find($Prestamo->libroId);
            $Cliente = Cliente::find($Prestamo->clienteId);
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