<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_enviador_id',
        'usuario_receptor_id',
        'productousu_id',
        'fecha'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function usuarioEnviador() {
        return $this->belongsTo(Usuario::class, 'usuario_enviador_id');
    }
    
    public function usuarioReceptor() {
        return $this->belongsTo(Usuario::class, 'usuario_receptor_id');
    }
    
    public function producto() {
        return $this->belongsTo(Producto::class);
    }
}
