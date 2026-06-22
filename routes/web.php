<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetoController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::resource('equipes', ProjetoController::class);