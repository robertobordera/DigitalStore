<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'marcaModelo',
        'imagen',
        'precio',
        'entrega',
        'descripcion',
        'caracteristicas',
        'oferta',
        'activo',
        'categoria_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ]
    ;

    public function valoraciones():HasMany
    {
        return $this->hasMany(Valoracion::class);
    }

    public function categoria():BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}
