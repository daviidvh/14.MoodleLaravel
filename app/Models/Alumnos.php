<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'dni',
        'fecha_nacimiento',
        'numero_matricula',
        'email',
        'password',
        'ciclo_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    

}
