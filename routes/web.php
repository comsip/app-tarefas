<?php

<<<<<<< HEAD
use App\Http\Controllers\RelatorioController; 
use App\Http\Controllers\ProdutoController; // 1. Adicionamos o controlador do produto aqui
use Illuminate\Support\Facades\Route;
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ProjetoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
>>>>>>> 33032d2fedee035c238edd082c4ff62a0d10ecf2

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Route::resource('relatorios', RelatorioController::class);

Route::resource('produtos', ProdutoController::class); // 2. Adicionamos a rota do produto aqui no final
=======
Route::resource('equipes', EquipeController::class);
Route::resource('projetos', ProjetoController::class);
>>>>>>> 33032d2fedee035c238edd082c4ff62a0d10ecf2
