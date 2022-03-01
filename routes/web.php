<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CicloController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ColegioController;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\CursoDivisionController;
use App\Http\Controllers\AsignarDivisionController;
use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\SoporteController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Ruta a establecimiento
Route::resource('establecimiento', ColegioController::class)->middleware(['auth:sanctum']);

//Ruta a carreras
Route::resource('carrera', CarreraController::class)->middleware(['auth:sanctum']);

//Ruta a curso
Route::resource('curso', CursoDivisionController::class)->middleware(['auth:sanctum']);


//Ruta a espacios
Route::resource('espacio', EspacioController::class)->middleware(['auth:sanctum']);


//Ruta a ciclos
Route::resource('ciclo', CicloController::class)->middleware(['auth:sanctum']);

Route::get('cicloclose',[CicloController::class,'close'])->name('ciclo.close')->middleware(['auth:sanctum']);
;

Route::put('cicloend/{ciclo}',[CicloController::class,'end'])->name('ciclo.end')->middleware(['auth:sanctum']);


//Ruta a alumnos
Route::resource('alumno', AlumnoController::class)->middleware(['auth:sanctum']);

Route::put('baja/{alumno}',[AlumnoController::class,'down'])->name('alumno.down')->middleware(['auth:sanctum']);

Route::put('alta/{alumno}',[AlumnoController::class,'up'])->name('alumno.up')->middleware(['auth:sanctum']);


Route::get('imprimir/{alumno}',[AlumnoController::class,'print'])->name('alumno.print')->middleware(['auth:sanctum']);

//Ruta a tutores
Route::resource('tutor', TutorController::class)->middleware(['auth:sanctum']);



//Ruta a inscripciones
Route::resource('inscripcion', InscripcionController::class)->middleware(['auth:sanctum']);

//Reeditando la ruta inscripcion create para poder agregarle el middleware ciclo
Route::get('inscripcion/create',[InscripcionController::class,'create'])->name('inscripcion.create')->middleware(['auth:sanctum','ciclo']);


Route::get('inscripcional',[InscripcionController::class,'alumno'])->name('inscripcion.alumno')->middleware(['auth:sanctum']);

Route::get('reinscribir',[InscripcionController::class,'existing'])->name('inscripcion.existing')->middleware(['auth:sanctum','ciclo']);

Route::post('reinscripcion',[InscripcionController::class,'enrollment'])->name('inscripcion.enrollment')->middleware(['auth:sanctum']);

Route::get('imprimir/inscripcion/{inscripcion}',[InscripcionController::class,'print'])->name('inscripcion.print')->middleware(['auth:sanctum']);

//Ruta a asignar divisiones
Route::resource('asignardivision', AsignarDivisionController::class)->middleware(['auth:sanctum']);



//Ruta a calificaciones
Route::resource('calificaciones', CalificacionController::class)->middleware(['auth:sanctum']);



//PDF

Route::get('reporte/curso',[ReporteController::class,'index'])->name('reporte.index')->middleware(['auth:sanctum']);


Route::get('reporte/alumno',[ReporteController::class,'alumno'])->name('reporte.alumno')->middleware(['auth:sanctum']);


Route::get('reporte/libro',[ReporteController::class,'libro'])->name('reporte.libro')->middleware(['auth:sanctum']);

Route::post('reporte/curso/pdf',[ReporteController::class,'reportes'])->name('reporte.reporte')->middleware(['auth:sanctum']);

Route::post('reporte/alumno/pdf',[ReporteController::class,'const'])->name('reporte.const')->middleware(['auth:sanctum']);


Route::post('reporte/libro/pdf',[ReporteController::class,'clasificaciones'])->name('reporte.clasificaciones')->middleware(['auth:sanctum']);


//Soporte
Route::get('soporte/acerca',[SoporteController::class,'index'])->name('soporte.index')->middleware(['auth:sanctum']);

Route::get('soporte/documentacion',[SoporteController::class,'doc'])->name('soporte.doc')->middleware(['auth:sanctum']);