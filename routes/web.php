<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ProjetoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('status', StatusController::class);
Route::resource('equipes', EquipeController::class);
Route::resource('projetos', ProjetoController::class);

