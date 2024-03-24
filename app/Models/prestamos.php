<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    protected $table = 'prestamos';
    protected $fillable = [
        'libroId',
        'clienteId',
        'fechaDePrestamo',
        'fechaDeDevolucion',
    ];
    
    // Add any additional methods or relationships here
}