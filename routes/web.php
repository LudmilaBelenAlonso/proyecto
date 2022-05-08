<?php

use Illuminate\Support\Facades\Route;

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
//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);
Route::get('acerca-de', [\App\Http\Controllers\HomeController::class, 'about']);

/* -------------------------------Autenticación-----------------------------------------------------------*/
Route::get('iniciar-sesion',[\App\Http\Controllers\AuthController::class, 'loginForm'])->name('auth.login.form');
Route::post('iniciar-sesion',[\App\Http\Controllers\AuthController::class,'loginEjecutar'])->name('auth.login.ejecutar');
Route::post('cerrar-sesion',[\App\Http\Controllers\AuthController::class,'logout'])->name('auth.logout');


/* -------------------------------Noticias-----------------------------------------------------------------*/

Route::get('noticias',[\App\Http\Controllers\NoticiasController::class, 'index'])->name('noticias.index');

Route::get('noticias/nueva',[\App\Http\Controllers\NoticiasController::class,'crearForm'])->name('noticias.crear.form')->middleware(['auth']);
Route::post('noticias/nueva',[\App\Http\Controllers\NoticiasController::class,'crearGrabar'])->name('noticias.crear.grabar')->middleware(['auth']);

Route::get('noticias/{id}',[\App\Http\Controllers\NoticiasController::class, 'ver']) ->name('noticias.ver');
Route::get('noticias/{id}/editar', [\App\Http\Controllers\NoticiasController::class, 'editarForm']) ->name('noticias.editar.form')->middleware(['auth']);
Route::post('noticias/{id}/editar', [\App\Http\Controllers\NoticiasController::class, 'editarGrabar']) ->name('noticias.editar.grabar')->middleware(['auth']);

Route::post('noticias/{id}/eliminar', [\App\Http\Controllers\NoticiasController::class, 'eliminar']) ->name('noticias.eliminar')->middleware(['auth']);

Route::get('admin/dashboard',[\App\Http\Controllers\AdminController::class, 'dashboard'])->middleware(['auth']);
