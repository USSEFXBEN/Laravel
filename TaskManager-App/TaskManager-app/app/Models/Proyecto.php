<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nombre', 'descripcion', 'duracion'];

    // Relación 1 a muchos - 1:N (un proyecto tiene muchas tareas)
    public function tareas()
    {
        return $this->hasMany(Tarea::class);
    }
}
