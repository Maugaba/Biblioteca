<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Telefonos extends Model
{
    protected $table = 'telefonos';
    protected $fillable = [
        'clienteId',
        'telefono',
    ];
    
    // Add any additional methods or relationships here
}