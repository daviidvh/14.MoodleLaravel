<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    public function asignatura()
    {
        return $this->belongsToMany(Asignatura::class, 'asignatura_has_entrega', 'entrega_id', 'asignatura_id');
    }
}