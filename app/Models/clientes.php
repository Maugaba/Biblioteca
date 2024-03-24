<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    protected $fillable = [
        'nombreCompleto',
    ];
    
    // Add any additional methods or relationships here
}