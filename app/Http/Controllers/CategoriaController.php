<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Actividad;

class CategoriaController extends Controller
{
    
    public function index()
    {
        $actividades = Categoria::all(); 
        return response()->json($actividades); 
    }


    public function getActividades($categoriaId)
    {
        $categoria = Categoria::findOrFail($categoriaId);
        return response()->json($categoria->actividades);
    }

    
    public function associateActividad(Request $request, $categoriaId, $actividadId)
    {
        $categoria = Categoria::findOrFail($categoriaId);
        $actividad = Actividad::findOrFail($actividadId);
        $categoria->actividades()->attach($actividadId);
        return response()->json(['message' => 'Activity associated with category successfully.']);
    }


    public function disassociateActividad($categoriaId, $actividadId)
    {
        $categoria = Categoria::findOrFail($categoriaId);
        $categoria->actividades()->detach($actividadId);
        return response()->json(['message' => 'Activity disassociated from category successfully.']);
    }
}
