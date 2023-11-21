<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeuController;
use App\Http\Controllers\Foobar;
use App\Http\Controllers\EstudantesController;
use App\Http\Controllers\SessoesController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\AnotacoesController;
use App\Http\Controllers\MetasController;





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
/// new create update destroy 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estudantes', [EstudantesController::class, 'index']);
Route::get('/registro', [EstudantesController::class, 'new']);
Route::get('/estudantes/{id}', [EstudantesController::class, 'show']);
Route::post('/registro', [EstudantesController::class, 'create']);
Route::post('/logar', [SessoesController::class, 'create']);
Route::get('/', [SessoesController::class, 'new']);
Route::get('/materias', [MateriasController::class, 'materia']);
Route::get('/sobrenos', [SobreController::class, 'show']);
Route::get('/deslogar', [SessoesController::class, 'back']);
Route::get('/sobrenos/logado', [SobreController::class, 'showLogado']);
Route::get('/calendario', [CalendarioController::class, 'show']);
Route::post('/materias/criar', [MateriasController::class, 'create']);
Route::delete('/materias/deletar/{id}', [MateriasController::class, 'destroy']);

Route::put('/materias/editar/{id}', [MateriasController::class, 'edit']);
Route::get('/materias/acessar/{id}', [MateriasController::class, 'show']);

Route::post('/anotacoes/criar', [AnotacoesController::class, 'create']);
Route::put('/anotacoes/editar/{id}', [AnotacoesController::class, 'edit']);
Route::delete('/anotacoes/deletar/{id}', [AnotacoesController::class, 'destroy']);


Route::post('/metas/criar', [MetasController::class, 'create']);
Route::put('/metas/editar/{id}', [MetasController::class, 'edit']);
Route::delete('/metas/deletar/{id}', [MetasController::class, 'destroy']);







