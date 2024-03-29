<?php

//header('Access-Control-Allow-Origin: http://localhost:3000');
//header('Access-Control-Allow-Headers: origin, x-requested-with, content-type');
//header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EditoraApiController;
use App\Http\Controllers\Api\UsuarioApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/editora/listar',[EditoraApiController::class,'buscaPaginada']);
//Route::get('/editora/listar/{nome}',[EditoraApiController::class,'buscaPaginada']);
Route::get('/editora/incluir',[EditoraApiController::class,'new']);
Route::get('/editora/alterar/{id}',[EditoraApiController::class,'show']);
Route::get('/editora/excluir/{id}',[EditoraApiController::class,'delete']);
Route::get('/editora/cancelar',[EditoraApiController::class,'cancelar']);

Route::post('/editora/salvar',[EditoraApiController::class,'create']);
Route::post('/editora/alterar/{id}',[EditoraApiController::class,'store']);
Route::post('/editora/excluir/{id}',[EditoraApiController::class,'excluir']);
Route::post('/api/login', [UsuarioApiController::class, 'show']);
Route::post('/register', [UsuarioApiController::class,'create']);
//]