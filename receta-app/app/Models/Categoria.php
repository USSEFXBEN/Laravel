<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Categoria extends Model
{
    use HasFactory;
    //Relacion 1 a muchos - 1:N (una categoria tiene muca recestas)
    public function recetas(): HasMany
    {
        return $this->hasMany(Receta::class); 
    }

}
