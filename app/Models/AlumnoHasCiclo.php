<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnoHasCiclo extends Model
{
    protected $table = 'alumno_has_ciclo';

    public function alumno()
    {
        return $this->belongsTo(Alumnos::class, 'alumno_id');
    }

    public function ciclo()
    {
        return $this->belongsTo(Ciclo::class, 'ciclo_id');
    }
}
