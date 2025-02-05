<?php

namespace App\Models;

use HasFactory;
use App\Models\Actividad;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $fillable = [
        'nombre',
        'apellidos',
        'nombre',
        'nombre_adulto_responsable',
        'apellido_adulto_responsable',
        'email_adulto_responsable',
        'telefono_adulto_responsable', 
    ];

    public function actividades()
    {
        return $this->belongsToMany(Actividad::class, 'solicitud_actividades');
    }
}
