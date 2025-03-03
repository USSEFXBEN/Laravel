<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Seguimiento extends Model
{
    use HasFactory;

    protected $fillable = ['tarea_id', 'fecha_inicio', 'fecha_fin', 'usuario', 'descripcion'];

    // Relación 1 a muchos - 1:N (una Tarea tiene muchos seguimiento)
    public function tarea(): BelongsTo
    {
        return $this->belongsTo(Tarea::class);
    }
}
