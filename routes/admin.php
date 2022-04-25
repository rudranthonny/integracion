<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Admin\InicioController;
use App\Http\Controllers\Admin\PlantillaController;
use App\Http\Controllers\Admin\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});

Route::resource('categorias', CategoriaController::class)->names('admin.categorias');
Route::get('categorias/{id}/veliminar',[CategoriaController::class,'veliminar'])->name('admin.categorias.veliminar');
Route::post('categorias/{id}/eliminar',[CategoriaController::class,'eliminar'])->name('admin.categorias.eliminar');
//modulo curso
Route::resource('cursos', CursoController::class)->names('admin.cursos');
// modulo plantilla
Route::resource('plantillas', PlantillaController::class)->names('admin.plantillas');
Route::get('plantillas/{id}/asignar',[PlantillaController::class,'asignar'])->name('admin.plantillas.asignar');
Route::post('plantillas/agregarcurso',[PlantillaController::class,'agregarcurso'])->name('admin.plantillas.agregarcurso');
Route::post('plantillas/eliminarcurso',[PlantillaController::class,'eliminarcurso'])->name('admin.plantillas.eliminarcurso');
//modulo inicio
Route::resource('inicios', InicioController::class)->names('admin.inicios');
//modulo usuario
Route::resource('usuarios', UsuarioController::class)->names('admin.usuarios');
Route::post('usuarios/consulta',[UsuarioController::class,'consulta'])->name('admin.usuarios.consulta');
Route::get('usuarios/{username}/consultapdf',[UsuarioController::class,'consultapdf'])->name('admin.usuarios.consultapdf');



