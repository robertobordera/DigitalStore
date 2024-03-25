<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comentariousu extends Model
{
    use HasFactory;

    public function usuario():BelongsTo{
        return $this->belongsTo(Usuario::class);
    }

    public function productousu():BelongsTo{
        return $this->belongsTo(Productousu::class);
    }
}
