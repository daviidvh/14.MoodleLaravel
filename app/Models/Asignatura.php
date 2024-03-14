<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    public function entregas()
    {
        return $this->belongsToMany(Entrega::class, 'asignatura_has_entrega', 'asignatura_id', 'entrega_id');
    }
}
