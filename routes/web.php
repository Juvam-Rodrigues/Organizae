<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeuController;
use App\Http\Controllers\Foobar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::delete('/organizae/{id}', [MeuController::class, 'apagarConta']);
Route::get('/',  [MeuController::class, 'login']); //1° argumento: url, 2°: Redirecionando para esse controler através do metodo login
Route::get('organizae/materia', [MeuController::class, 'materia']);
Route::get('/test',  [Foobar::class, 'teste']);
