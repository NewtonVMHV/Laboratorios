<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro_Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre','Fecha','Actividad','Carrera','Materia','Observaciones'
    ];
}
