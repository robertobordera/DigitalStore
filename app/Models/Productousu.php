<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Productousu extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'precio',
        'imagen',
        'descripcion',
        'activo',
        'fechaSubida',
        'categoria_id',
        'usuario_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function categoria():BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function usuario():BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }

    public function comentariousus():HasMany
    {
        return $this->hasMany(Comentariousu::class);
    }

    public function ventas():HasMany
    {
        return $this->hasMany(Venta::class);
    }

    public function compras():HasMany
    {
        return $this->hasMany(Compra::class);
    }
}
