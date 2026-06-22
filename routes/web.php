<?php
<<<<<<< HEAD
use App\Http\Controllers\ComentarioController;
use Illuminate\Support\Facades\Route;
=======

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;
>>>>>>> beb5549a22f22ab23a94c2d283ca9c0abd466ad1

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
<<<<<<< HEAD
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
=======
>>>>>>> beb5549a22f22ab23a94c2d283ca9c0abd466ad1
*/

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::resource('comentarios', ComentarioController::class);
=======
Route::resource('equipes', EquipeController::class);
>>>>>>> beb5549a22f22ab23a94c2d283ca9c0abd466ad1
