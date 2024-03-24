<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    protected $table = 'libros';
    protected $fillable = [
        'nombreDelLibro',
        'autoresOEditorial',
    ];
    
    // Add any additional methods or relationships here
}