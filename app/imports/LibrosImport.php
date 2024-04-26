<?php
namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Libros;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
class LibrosImport implements ToModel, WithStartRow, WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            0 => new self(),
        ];
    }
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        
        return new Libros([
            'nombreDelLibro' => $row[2] ?: 'Sin nombre',
            'autoresOEditorial' => $row[3] ?: 'Sin autor o editorial',
            'cantidad' => $row[4] ?: 1, 
        ]);
    }
}

