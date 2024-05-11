<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comentariousu extends Model
{
    use HasFactory;

    protected $fillable = [
        'comentario',
        'fecha',
        'editado',
        'productousu_id',
        'usuario_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function usuario():BelongsTo{
        return $this->belongsTo(Usuario::class);
    }

    public function productousu():BelongsTo{
        return $this->belongsTo(Productousu::class);
    }
}
