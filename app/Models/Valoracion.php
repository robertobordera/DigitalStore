<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Valoracion extends Model
{
    use HasFactory;

    protected $table = 'valoraciones';


    public function usuario():BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }

    public function producto():BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }
}
