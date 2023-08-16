<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/alumno',[App\Http\Controllers\AlumnoController::class, 'index'])->name('alumno');
Route::get('/alumno/Agregar', [App\Http\Controllers\AlumnoController::class, 'create'])->name('alumno.create');
Route::post('/alumno', [App\Http\Controllers\AlumnoController::class, 'store'])->name('alumo.store');
Route::get('/alumno/{alumno}/Editar', [App\Http\Controllers\AlumnoController::class, 'edit'])->name('alumno.edit');
Route::put('/alumno/{alumno}', [App\Http\Controllers\AlumnoController::class, 'update'])->name('alumno.update');
Route::delete('/alumno/{alumno}', [App\Http\Controllers\AlumnoController::class, 'destroy'])->name('alumno.destroy');

Route::get('/Carrera',[App\Http\Controllers\CarreraController::class, 'index'])->name('carrera');
Route::get('/Carrera/Agregar', [App\Http\Controllers\CarreraController::class, 'create'])->name('carrera.create');
Route::post('/Carrera', [App\Http\Controllers\CarreraController::class, 'store'])->name('carrera.store');
Route::get('/Carrera/{carrera}/Editar', [App\Http\Controllers\CarreraController::class, 'edit'])->name('carrera.edit');
Route::put('/Carrera/{carrera}', [App\Http\Controllers\CarreraController::class, 'update'])->name('carrera.update');
Route::delete('/Carrera/{carrera}', [App\Http\Controllers\CarreraController::class, 'destroy'])->name('carrera.destroy');

Route::get('/Departamento',[App\Http\Controllers\DepartamentoController::class, 'index'])->name('departamento');
Route::get('/Departamento/Agregar', [App\Http\Controllers\DepartamentoController::class, 'create'])->name('departamento.create');
Route::post('/Departamento', [App\Http\Controllers\DepartamentoController::class, 'store'])->name('departamento.store');
Route::get('/Departamento/{departamento}/Editar', [App\Http\Controllers\DepartamentoController::class, 'edit'])->name('departamento.edit');
Route::put('/Departamento/{departamento}', [App\Http\Controllers\DepartamentoController::class, 'update'])->name('departamento.update');
Route::delete('/Departamento/{departamento}', [App\Http\Controllers\DepartamentoController::class, 'destroy'])->name('departamento.destroy');

Route::get('/Materia',[App\Http\Controllers\MateriaController::class, 'index'])->name('materia');
Route::get('/Materia/Agregar', [App\Http\Controllers\MateriaController::class, 'create'])->name('materia.create');
Route::post('/Materia', [App\Http\Controllers\MateriaController::class, 'store'])->name('materia.store');
Route::get('/Materia/{materia}/Editar', [App\Http\Controllers\MateriaController::class, 'edit'])->name('materia.edit');
Route::put('/Materia/{materia}', [App\Http\Controllers\MateriaController::class, 'update'])->name('materia.update');
Route::delete('/Materia/{materia}', [App\Http\Controllers\MateriaController::class, 'destroy'])->name('materia.destroy');

Route::get('/Personal',[App\Http\Controllers\PersonalController::class, 'index'])->name('personal');
Route::get('/Personal/Agregar', [App\Http\Controllers\PersonalController::class, 'create'])->name('personal.create');
Route::post('/Personal', [App\Http\Controllers\PersonalController::class, 'store'])->name('personal.store');
Route::get('/Personal/{personal}/Editar', [App\Http\Controllers\PersonalController::class, 'edit'])->name('personal.edit');
Route::put('/Personal/{personal}', [App\Http\Controllers\PersonalController::class, 'update'])->name('personal.update');
Route::delete('/Personal/{personal}', [App\Http\Controllers\PersonalController::class, 'destroy'])->name('personal.destroy');

Route::get('/Registro-Alumno',[App\Http\Controllers\RegistroAlumnoController::class, 'index'])->name('registro_alumno');
Route::get('/Registro-Alumno/Agregar', [App\Http\Controllers\RegistroAlumnoController::class, 'create'])->name('registro_alumno.create');
Route::post('/Registro-Alumno', [App\Http\Controllers\RegistroAlumnoController::class, 'store'])->name('registro_alumo.store');
Route::get('/Registro-Alumno/{registro_alumno}/Editar', [App\Http\Controllers\RegistroAlumnoController::class, 'edit'])->name('registro_alumno.edit');
Route::put('/Registro-Alumno/{registro_alumno}', [App\Http\Controllers\RegistroAlumnoController::class, 'update'])->name('registro_alumno.update');
Route::delete('/Registro-Alumno/{registro_alumno}', [App\Http\Controllers\RegistroAlumnoController::class, 'destroy'])->name('registro_alumno.destroy');
Route::delete('/Registro-Alumno', [App\Http\Controllers\RegistroAlumnoController::class, 'eliminarTabla'])->name('registro_alumno.eliminarTabla');
Route::get('/Registro-Alumno/Exportar', [App\Http\Controllers\RegistroAlumnoController::class,'export'])->name('registro_alumno.export');

Route::get('/Registro-Docente',[App\Http\Controllers\RegistroDocenteController::class, 'index'])->name('registro_docente');
Route::get('/Registro-Docente/Agregar', [App\Http\Controllers\RegistroDocenteController::class, 'create'])->name('registro_docente.create');
Route::post('/Registro-Docente', [App\Http\Controllers\RegistroDocenteController::class, 'store'])->name('registro_docente.store');
Route::get('/Registro-Docente/{registro_docente}/Editar', [App\Http\Controllers\RegistroDocenteController::class, 'edit'])->name('registro_docente.edit');
Route::put('/Registro-Docente/{registro_docente}', [App\Http\Controllers\RegistroDocenteController::class, 'update'])->name('registro_docente.update');
Route::delete('/Registro-Docente/{registro_docente}', [App\Http\Controllers\RegistroDocenteController::class, 'destroy'])->name('registro_docente.destroy');
Route::delete('/Registro-Docente', [App\Http\Controllers\RegistroDocenteController::class, 'eliminarTabla'])->name('registro_docente.eliminarTabla');
Route::get('/Registro-Docente/Exportar', [App\Http\Controllers\RegistroDocenteController::class,'export'])->name('registro_docente.export');

Route::get('/Registro-Externo',[App\Http\Controllers\ExternoController::class, 'index'])->name('externo');
Route::get('/Registro-Externo/Agregar', [App\Http\Controllers\ExternoController::class, 'create'])->name('externo.create');
Route::post('/Registro-Externo', [App\Http\Controllers\ExternoController::class, 'store'])->name('externo.store');
Route::get('/Registro-Externo/{externo}/Editar', [App\Http\Controllers\ExternoController::class, 'edit'])->name('externo.edit');
Route::put('/Registro-Externo/{externo}', [App\Http\Controllers\ExternoController::class, 'update'])->name('externo.update');
Route::delete('/Registro-Externo/{externo}', [App\Http\Controllers\ExternoController::class, 'destroy'])->name('externo.destroy');
Route::delete('/Registro-Externo', [App\Http\Controllers\ExternoController::class, 'eliminarTabla'])->name('externo.eliminarTabla');
Route::get('/Registro-Externo/Exportar', [App\Http\Controllers\ExternoController::class,'export'])->name('externo.export');


