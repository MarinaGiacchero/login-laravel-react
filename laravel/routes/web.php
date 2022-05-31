<?php

////header('Access-Control-Allow-Origin: http://localhost:3000');
//header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');
//header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;
use App\Models\Usuario;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/usuario/listar',[UsuarioController::class,'index'])->name('usuario.listar');
Route::get('/usuario/incluir',[UsuarioController::class,'new']);
Route::get('/usuario/alterar/{id}',[UsuarioController::class,'show']);
Route::get('/usuario/excluir/{id}',[UsuarioController::class,'delete']);
Route::get('/usuario/cancelar',[UsuarioController::class,'cancelar']);

Route::post('/usuario/salvar',[UsuarioController::class,'create']);
Route::post('/usuario/alterar/{id}',[UsuarioController::class,'store']);
Route::post('/usuario/excluir/{id}',[UsuarioController::class,'excluir']);

