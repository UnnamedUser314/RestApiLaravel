<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ActividadController;

Route::get('/alumno', [AlumnoController::class, 'index']);
Route::post('/alumno', [AlumnoController::class, 'store']);

Route::get('/actividades', [ActividadController::class, 'index']);