<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    use HasFactory;
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'ciclos_has_asignaturas', 'ciclos_id', 'asignaturas_id');
    }
}
