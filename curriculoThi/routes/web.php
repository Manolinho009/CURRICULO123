<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\curriculo;
use App\Http\Controllers\ContatoControll;
use App\Http\Controllers\EmpresaControll;
use App\Http\Controllers\CursoController;

Route::get('/', [curriculo::class , 'index']);
Route::get('/curriculo/create', [curriculo::class , 'create']);

Route::post('/empresa/create/{id}', [EmpresaControll::class , 'create']);
Route::post('/empresa/salvar/{id}', [EmpresaControll::class , 'store']);

Route::post('/curso/create/{id}', [CursoController::class , 'create']);
Route::post('/curso/salvar', [CursoController::class , 'store']);

Route::post('/contato/salvar/{id}', [ContatoControll::class , 'store', $id]);

Route::post('/salvar', [curriculo::class , 'store']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard/{id}',[curriculo::class , 'show']);
});
