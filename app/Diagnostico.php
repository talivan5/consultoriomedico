<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnosticos';
    protected $fillable = [
        'nombre',
        'apellidos',
        'ci',
        'fecha_consulta',
        'enfermedad',
        'descripcion_patologia',
        'condicion'
    ];
}
