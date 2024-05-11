<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    use HasFactory;

    protected $fillable = [
        'producto_id',
        'usuario_id',
        'productousu_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
