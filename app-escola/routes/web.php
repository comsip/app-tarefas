<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoricoController;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('historicos', HistoricoController::class);
