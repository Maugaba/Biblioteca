<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    protected $table = 'usuarios';
    protected $fillable = [
        'username',
        'password',
    ];
    
}