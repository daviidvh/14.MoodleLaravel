<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileModel extends Model
{
    use HasFactory;

    protected $table = 'documentos';
    protected $fillable = ['user_id','nombre', 'extension', 'ubicacion', 'entregas_id'];
    public $timestamps = false;
}
