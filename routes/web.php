<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelatorioController;

use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ProjetoController;

Route::get('/', function () {
    return view('welcome');});

Route::resource('relatorio', RelatorioController::class);
Route::resource('equipes', EquipeController::class);
Route::resource('projetos', ProjetoController::class);
