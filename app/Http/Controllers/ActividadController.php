<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Actividad;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all(); 
        return response()->json($actividades); 
    }


    public function getCategorias($actividadId)
    {
        $actividad = Actividad::findOrFail($actividadId);
        return response()->json($actividad->categorias);
    }


    public function getAlumnos($actividadId)
    {
        $actividad = Actividad::findOrFail($actividadId);
        return response()->json($actividad->alumnos);
    }


    public function associateCategoria($actividadId, $categoriaId)
    {
        $actividad = Actividad::findOrFail($actividadId);
        $categoria = Categoria::findOrFail($categoriaId);

        // Avoid duplicate association
        if (!$actividad->categorias()->where('categoria_id', $categoriaId)->exists()) {
            $actividad->categorias()->attach($categoriaId);
            return response()->json(['message' => 'Category associated successfully.']);
        } else {
            return response()->json(['message' => 'Category already associated.'], 409);
        }
    }


    public function disassociateCategoria($actividadId, $categoriaId)
    {
        $actividad = Actividad::findOrFail($actividadId);
        $actividad->categorias()->detach($categoriaId);
        return response()->json(['message' => 'Category disassociated from activity successfully.']);
    }
}
