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
        'nombre_responsable',
        'apellido_responsable',
        'email_responsable',
        'telefono_responsable', 
    ];

    public function actividades()
    {
        return $this->belongsToMany(Actividad::class, 'solicitud');
    }
}
