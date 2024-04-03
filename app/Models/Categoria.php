<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'nombre',
    //     'avatar',
    //     'contraseña',
    //     'correo',
    //     'calle',
    //     'numeroCalle',
    //     'codigoPostal',
    //     'latitud',
    //     'longitud',
    //     'me',
    // ];

    // protected $hidden = [
    //     'created_at',
    //     'updated_at'
    // ];

    public function productos():HasMany{
        return $this->hasMany(Producto::class);
    }

    public function productousus():HasMany{
        return $this->hasMany(Productousu::class);
    }
}
