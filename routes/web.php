<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelatorioController;



Route::get('/', function () {
    return view('welcome');});

Route::resource('relatorio', RelatorioController::class);

