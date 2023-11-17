<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MatriculaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AlumnoController::class)->group(function() {
    Route::get('/alumnos', 'index');
    Route::get('/alumnos/{id_alumno}', 'show');
    Route::post('/alumnos', 'store');
    Route::put('/alumnos/{id}', 'update');
    Route::delete('/alumnos/{id}', 'destroy');    
});
Route::controller(DocenteController::class)->group(function() {
    Route::get('/docentes', 'index');
    Route::get('/docentes/{id}', 'show');
    Route::post('/docentes', 'store');
    Route::put('/docentes/{id}', 'update');
    Route::delete('/docentes/{id}', 'destroy');    
});
Route::controller(CursoController::class)->group(function() {
    Route::get('/cursos', 'index');
    Route::get('/cursos/{id}', 'show');
    Route::post('/cursos', 'store');
    Route::put('/cursos/{id}', 'update');
    Route::delete('/cursos/{id}', 'destroy');    
});
Route::controller(MatriculaController::class)->group(function() {
    Route::get('/matriculas', 'index');
    Route::get('/matriculas/{id}', 'show');
    Route::post('/alumnos/{id}/matriculas', 'store');
    Route::put('/matriculas/{id}', 'update');
    Route::delete('/matriculas/{id}', 'destroy');    
});
Route::controller(AsistenciaController::class)->group(function() {
    Route::get('/asistencias', 'index');
    Route::get('/asistencias/{id}', 'show');
    Route::post('/asistencias', 'store');
    Route::put('/asistencias/{id}', 'update');
    Route::delete('/asistencias/{id}', 'destroy');    
});
