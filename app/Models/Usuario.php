<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
{
    use HasFactory;

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
}
