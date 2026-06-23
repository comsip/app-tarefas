<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificacaoController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\ProdutoController; // 1. Adicionamos o controlador do produto aqui
use App\Http\Controllers\PrazoController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\PrazoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('usuarios', UsuarioController::class);
Route::resource('equipes', EquipeController::class);
Route::resource('projetos', ProjetoController::class);
Route::resource('relatorios', RelatorioController::class);
Route::resource('produtos', ProdutoController::class); // 2. Adicionamos a rota do produto aqui no final
Route::resource('prazos', PrazoController::class);
Route::resource('notificacoes', NotificacaoController::class);
Route::get('/notificacao', [NotificacaoController::class, 'index'])->name('notificacao.index');
Route::get('/notificacao/{id}', [NotificacaoController::class, 'show'])->name('notificacao.show');
Route::patch('/notificacao/{id}/lida', [NotificacaoController::class, 'marcarComoLida'])
    ->name('notificacao.lida');;
Route::resource('equipes', EquipeController::class);
Route::resource('comentarios', ComentarioController::class);
Route::resource('relatorios', RelatorioController::class);
Route::resource('produtos', ProdutoController::class); // 2. Adicionamos a rota do produto aqui no final
Route::resource('status', StatusController::class);
Route::resource('equipes', EquipeController::class);
Route::resource('projetos', ProjetoController::class);

Route::get('/', function () {
    return view('welcome');
});
