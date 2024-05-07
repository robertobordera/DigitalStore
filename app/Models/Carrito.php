<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'producto_id',
        'usuario_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

}
