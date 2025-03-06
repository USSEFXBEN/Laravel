<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Festival extends Model
{
    use HasFactory;

    
    protected $fillable = ['nombre', 'genero', 'fecha'];

    
   // Relación 1 a muchos - 1:N (un Festival tiene muchos artistas)
    public function artistas(): HasMany{
        return $this->hasMany(Artista::class);
    }
}
