<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudantesController;
use App\Http\Controllers\SessoesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/// new create update destroy 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estudantes', [EstudantesController::class, 'index']);
Route::get('/registro', [EstudantesController::class, 'new']);
Route::get('/estudantes/{id}', [EstudantesController::class, 'show']);
Route::post('/registro', [EstudantesController::class, 'create']);
Route::post('/logar', [SessoesController::class, 'create']);
Route::get('/', [SessoesController::class, 'new']);
