<?php

use App\Http\Controllers\RelatorioController; 
use App\Http\Controllers\ProdutoController; // 1. Adicionamos o controlador do produto aqui
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('relatorios', RelatorioController::class);

Route::resource('produtos', ProdutoController::class); // 2. Adicionamos a rota do produto aqui no final