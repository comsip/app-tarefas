<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('equipes', EquipeController::class);