<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    
    protected $fillable = [
        'nombreCompleto',
        'estado',
    ];
    
    // Add any additional methods or relationships here
}
