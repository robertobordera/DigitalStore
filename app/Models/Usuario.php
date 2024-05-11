<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Usuario extends Authenticatable implements AuthenticatableContract
{
    use HasApiTokens,HasFactory,Notifiable;

    protected $fillable = [
        'nombre',
        // 'avatar',
        'password',
        'correo',
        'calle',
        'numeroCalle',
        'codigoPostal',
        'provincia',
        'latitud',
        'longitud',
        'me',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function valoraciones():HasMany
    {
        return $this->hasMany(Valoracion::class);
    }

    public function productousus():HasMany
    {
        return $this->hasMany(Productousu::class);
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

    public function productos():BelongsToMany
    {
        return $this->belongsToMany(Producto::class,'carritos');
    }

    public function productosusus():BelongsToMany
    {
        return $this->belongsToMany(Productousu::class,'favoritos');
    }
}
