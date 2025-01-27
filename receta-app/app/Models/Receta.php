<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Receta extends Model
{
    use HasFactory;
    //Para indicar que la receta pertenece a una categoria
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class); 
    }
}
