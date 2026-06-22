<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\NotificacaoController;

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

Route::resource('notificacoes', NotificacaoController::class);
Route::get('/notificacao', [NotificacaoController::class, 'index'])->name('notificacao.index');
Route::get('/notificacao/{id}', [NotificacaoController::class, 'show'])->name('notificacao.show');
Route::patch('/notificacao/{id}/lida', [NotificacaoController::class, 'marcarComoLida'])
    ->name('notificacao.lida');;