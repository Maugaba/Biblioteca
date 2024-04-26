<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Libros;
use App\Imports\LibrosImport;

class ExcelController extends Controller
{
    public function import(Request $request) {
        $request->validate([
            'excel_file' => 'required|file|mimes:xlsx,csv'
        ]);
    
        $file = $request->file('excel_file');
        // Procesar el archivo Excel
        try {
            config(['excel.import.startRow' => 1]);
            Excel::import(new LibrosImport, $file, null);
            return response()->json(['success' => 'Libros importados correctamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
        
    }
    
}