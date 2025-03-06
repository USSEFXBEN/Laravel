<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artista extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'num_integrantes', 'fecha_debut', 'estado','festival_id'];

    // Relación 1 a muchos - 1:N (un artista pertenece a un festival)
    public function Festival(): BelongsTo
    {
        return $this->belongsTo(Festival::class);
    }
}
