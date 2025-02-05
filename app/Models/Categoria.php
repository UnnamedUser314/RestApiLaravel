<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Actividad;
use HasFactory;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function actividades()
    {
        return $this->belongsToMany(Actividad::class, 'actividad_pertence');
    }
}
