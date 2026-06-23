<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\UsuarioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
>>>>>>> origin/aluno-murilo
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('equipes', EquipeController::class);
Route::resource('projetos', ProjetoController::class);
Route::resource('usuarios', UsuarioController::class);
