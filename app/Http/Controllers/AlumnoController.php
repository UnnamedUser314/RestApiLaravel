<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
 
    public function getActividades($alumnoId)
    {
        $alumno = Alumno::findOrFail($alumnoId);
        return response()->json($alumno->actividades);
    }


    public function associateActividad(Request $request, $alumnoId, $actividadId)
    {
        $alumno = Alumno::findOrFail($alumnoId);
        $actividad = Actividad::findOrFail($actividadId);
        $alumno->actividades()->attach($actividadId);
        return response()->json(['message' => 'Activity associated with student successfully.']);
    }


    public function disassociateActividad($alumnoId, $actividadId)
    {
        $alumno = Alumno::findOrFail($alumnoId);
        $alumno->actividades()->detach($actividadId);
        return response()->json(['message' => 'Activity disassociated from student successfully.']);
    }
}
