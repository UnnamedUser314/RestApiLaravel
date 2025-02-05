<?php

namespace App\Models;

use HasFactory;
use App\Models\Categoria;
use App\Models\Alumno;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades';

    protected $fillable = [
        'titulo',
        'descripcion',
        'horario',
        'etapa_educativa',
        'cuota',
        'image',
    ];

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'pertence');
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'solicitud');
    }
}
