<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('categorias', App\Http\Controllers\categoriasController::class);
Route::resource('eventos', App\Http\Controllers\eventosController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('permisos', App\Http\Controllers\PermisoController::class);
Route::resource('asignar', App\Http\Controllers\AsignarController::class);
Route::resource('auditoria', App\Http\Controllers\AuditoriaEventoController::class);
// Route::get('auth/redirect', App\Http\Controllers\AuthController::class);
// Route::get('auth/callback-url', App\Http\Controllers\AuthController::class);

Route::get('/auth/redirect', [AuthController::class,'redirect']);
Route::get('/auth/callback-url', [AuthController::class,'callback']);