<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fillable = [
        'ClaveMat','Nivel_Escolar','Nombre','TipoMateria','NombreAbreviado','Carrera','Departamento'
    ];
}
