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

    public function store(){
        $Data = $_POST;
        try{
            $Book = new Libros();
            $Book->nombreDelLibro = $Data['booksName'];
            $Book->autoresOEditorial = $Data['booksEditor'];
            $Book->cantidad = $Data['booksQuantity'];
            $Book->save();
            return response()->json(['success' => 'Book saved successfully']);
        }catch (\Exception $e) {
            return response()->json(['error' => 'Error saving book']);
        }
    }

    public function edit($id){
        $Book = Libros::find($id);
        return view('Book.edit', compact('Book'));
    }
    

    public function update($id){
        $Data = $_POST;
        try{
            $Book = Libros::find($id);
            $Book->nombreDelLibro = $Data['booksName'];
            $Book->autoresOEditorial = $Data['booksEditor'];
            $Book->cantidad = $Data['booksQuantity'];
            $Book->save();
            return response()->json(['success' => 'Libro Actualizado correctamente']);
        }catch (\Exception $e) {
            return response()->json(['error' => 'Error al actualizar el libro']);
        }
    }

    public function change(){
        $Id = $_POST['id'];
        try{
            $Book = Libros::find($Id);
            
            if($Book->estado == 'disponible'){
                $Book->estado = 'ocupado';
            } elseif($Book->estado == 'ocupado'){
                $Book->estado = 'disponible';
            }
            
            $Book->save();
            
            return response()->json(['success' => 'Estado del libro cambiado correctamente']);
        }catch (\Exception $e) {
            return response()->json(['error' => 'Error al cambiar el estado del libro']);
        }
    }
    
}