<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrioridadeController;

Route::get('/', function () {
    return view('welcome');
});

// Apenas a rota do projeto oficial e correto:
Route::resource('prioridades', PrioridadeController::class);
