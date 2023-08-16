<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Externo extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nombre','Fecha','numAlumnos','Carrera','Observaciones','Actividad'
    ];
}
