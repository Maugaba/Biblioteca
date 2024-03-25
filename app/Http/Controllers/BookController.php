<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Libros;

class BookController extends Controller
{
    public function index()
    {
        return view('Book.index');
    }

    public function create()
    {
        return view('Book.create');
    }

    public function edit($id)
    {
        return view('Book.edit');
    }

    public function listjson(){
        $State = $_POST['state'];
        $Libros = Libros::all()->where('estado', $State);
        $Book = [];
        foreach ($Libros as $Libro) {
            $Model = [
                "id" => $Libro->id,
                "bookName" => $Libro->nombreDelLibro,
                "authorOrEditor" => $Libro->autoresOEditorial,
                "quantity" => $Libro->cantidad,
                "status" => $Libro->estado,
                "actions" => ""
            ];
            array_push($Book, $Model);
        }
        $Meta =[
            "page"=> 1,
            "pages"=> 1,
            "perpage"=> 5,
            "total"=> count($Book),
            ];
        $data = [
            "meta" => $Meta,
            "data" => $Book
        ];
        return response()->json($data);
    }
}