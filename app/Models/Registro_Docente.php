<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro_Docente extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre','Fecha','numAlumnos','Actividad','Carrera','Materia','Observaciones'
    ];
}
