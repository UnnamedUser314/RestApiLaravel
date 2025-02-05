<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware('api')->group(function () {
//     Route::get('/api/actividades', [ActividadController::class, 'index']);
// });

// Route::middleware('api')->group(function () {
//     Route::get('/api/actividades/{actividadId}/categorias', [ActividadController::class, 'getCategorias']);
// });

// Route::middleware('api')->group(function () {
//     Route::get('/api/actividades/{actividadId}/alumnos', [ActividadController::class, 'getAlumnos']);
// });

// Route::middleware('api')->group(function () {
//     Route::post('/api/actividades/{actividadId}/categorias/{categoriaId}', [ActividadController::class, 'associateCategoria']);
// });

// Route::middleware('api')->group(function () {
//     Route::get('/api/actividades/{actividadId}/categorias/{categoriaId}', [ActividadController::class, 'disassociateCategoria']);
// });

// Route::middleware('api')->group(function () {
//     Route::get('/api/categorias', [CategoriaController::class, 'index']);
// });

// Route::middleware('api')->group(function () {
//     Route::get('/api/categorias/{categoriaId}/actividades', [CategoriaController::class, 'getActividades']);
// });

// Route::middleware('api')->group(function () {
//     Route::post('/api/categorias/{categoriaId}/actividades/{actividadId}', [CategoriaController::class, 'associateActividad']);
// });

// Route::middleware('api')->group(function () {
//     Route::get('/api/categorias/{categoriaId}/actividades/{actividadId}', [CategoriaController::class, 'disassociateActividad']);
// });

// Route::middleware('api')->group(function () {
//     Route::get('/api/alumnos/{alumnoId}/actividades', [AlumnoController::class, 'getActividades']);
// });

// Route::middleware('api')->group(function () {
//     Route::get('/api/alumnos/{alumnoId}/actividades/{actividadId}', [AlumnoController::class, 'associateActividad']);
// });

// Route::middleware('api')->group(function () {
//     Route::get('/api/alumnos/{alumnoId}/actividades/{actividadId}', [AlumnoController::class, 'disassociateActividad']);
// });
