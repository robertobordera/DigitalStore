<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'productousu_id',
        'producto_id',
        'usuario_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ]
    ;

    public function usuario():BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }

    public function productousu():BelongsTo
    {
        return $this->belongsTo(Productousu::class);
    }

    public function producto():BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }
}
