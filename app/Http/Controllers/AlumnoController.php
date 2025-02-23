<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Actividad;
use App\Models\Categoria;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
 
    public function index()
    {
        $actividades = Alumno::all(); 
        return response()->json($actividades); 
    }

    public function getActividades($alumnoId)
    {
        $alumno = Alumno::findOrFail($alumnoId);
        return response()->json($alumno->actividades);
    }


    public function associateActividad(Request $request, $alumnoId, $actividadId)
    {
        $alumno = Alumno::findOrFail($alumnoId);
        $actividad = Actividad::findOrFail($actividadId);
        $alumno->actividades()->attach($actividadId, ['estado' => 'pendiente','fecha' => now()]);
        return response()->json(['message' => 'Activity associated with student successfully.']);
    }


    public function disassociateActividad($alumnoId, $actividadId)
    {
        $alumno = Alumno::findOrFail($alumnoId);
        $alumno->actividades()->detach($actividadId);
        return response()->json(['message' => 'Activity disassociated from student successfully.']);
    }
}
