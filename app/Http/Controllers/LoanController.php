<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Libros;
use App\Models\Prestamos;
use App\Models\Cliente;
use Illuminate\Support\Facades\Date;
use DB;

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

    public function listjson(){
        $State = $_POST['state'];
        $Prestamos = Prestamos::all()->where('estado', $State);
        $Loan = [];
        foreach ($Prestamos as $Prestamo) {
            $Libro = Libros::find($Prestamo->libroId);
            $Cliente = Cliente::find($Prestamo->clienteId);
            $Books = explode(", ", $Prestamo->libroId);
            $BooksName = [];
            foreach ($Books as $book) {
                $Libro = Libros::find($book);
                $Model = [
                    "name" => $Libro->nombreDelLibro,
                ];
                array_push($BooksName, $Model);
            }

            $Model = [
                "id" => $Prestamo->id,
                "book" => $BooksName,
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

    public function store(){
        $Data = $_POST;
        DB::beginTransaction();
        try {
            foreach ($Data['books'] as $book) {
                $Libro = Libros::find($book);
                if ($Libro->cantidad == 1) {
                    $Libro->estado = 'ocupado';
                    $Libro->cantidad = $Libro->cantidad - 1;
                    $Libro->save();
                }
                else{
                    $Libro->cantidad = $Libro->cantidad - 1;
                    $Libro->save();
                }
            }
            $bookList = implode(", ", $Data['books']);
            $Prestamo = new Prestamos();
            $Prestamo->libroId = $bookList;
            $Prestamo->clienteId = $Data['client'];
            $Prestamo->fechaDePrestamo = Date('Y-m-d');
            $Prestamo->save();

            foreach ($Data['books'] as $book) {
                $Libro = Libros::find($book);
                $Libro->estado = 'ocupado';
                $Libro->save();
            }
            DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Prestamo creado correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => 'Error al crear el prestamo']);
        }
    }

    public function change(){
        $Id = $_POST['id'];
        DB::beginTransaction();
        try {
            $Prestamo = Prestamos::find($Id);
            $Prestamo->devuelto = 1;
            $Prestamo->estado = 'inactivo';
            $Prestamo->fechaDeDevolucion = Date('Y-m-d');
            $Prestamo->save();
            $Books = explode(", ", $Prestamo->libroId);
            foreach ($Books as $book) {
                $Libro = Libros::find($book);
                $Libro->cantidad = $Libro->cantidad + 1;
                $Libro->estado = 'disponible';
                $Libro->save();
            }
            DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Prestamo devuelto correctamente']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => 'Error al devolver el prestamo']);
        }
        
    }

    public function getChartData()
    {
        $loanData = [];
        $months = [
            'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'
        ];
    
        for ($i = 0; $i < 12; $i++) {
            $month = date("m", mktime(0, 0, 0, $i + 1, 1, date("Y")));
    
            $loans = Prestamos::whereYear('fechaDePrestamo', date("Y"))
                ->whereMonth('fechaDePrestamo', $month)
                ->count();
    
            $loanData[] = $loans;
        }
    
        return response()->json([
            'loanData' => $loanData,
            'months' => $months
        ]);
    }

}