<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AlumnoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); 

Route::get('/actividades', [ActividadController::class, 'index']);

Route::get('/actividades/{actividadId}/categorias', [ActividadController::class, 'getCategorias']);

Route::get('/actividades/{actividadId}/alumnos', [ActividadController::class, 'getAlumnos']);

Route::post('/actividades/{actividadId}/categorias/{categoriaId}', [ActividadController::class, 'associateCategoria']);

Route::delete('/actividades/{actividadId}/categorias/{categoriaId}', [ActividadController::class, 'disassociateCategoria']);

Route::get('/categorias', [CategoriaController::class, 'index']);

Route::get('/categorias/{categoriaId}/actividades', [CategoriaController::class, 'getActividades']);

Route::post('/categorias/{categoriaId}/actividades/{actividadId}', [CategoriaController::class, 'associateActividad']);

Route::delete('/categorias/{categoriaId}/actividades/{actividadId}', [CategoriaController::class, 'disassociateActividad']);

Route::get('/alumnos', [AlumnoController::class, 'index']);

Route::get('/alumnos/{alumnoId}/actividades', [AlumnoController::class, 'getActividades']);

Route::post('/alumnos/{alumnoId}/actividades/{actividadId}', [AlumnoController::class, 'associateActividad']);

Route::delete('/alumnos/{alumnoId}/actividades/{actividadId}', [AlumnoController::class, 'disassociateActividad']);
