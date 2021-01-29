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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/entidades/guardar', "EntidadeController@store");

Route::get('/entidades/{id_entidade}/home', "EntidadeController@home");
Route::get('/entidades/{id_entidade}/projetos', "ProjetoController@listar_projetos_entidades");
Route::get('/entidades/{id_entidade}/projetos/{id_projeto}/detalhes', "ProjetoController@detalhes_projeto_entidades");
Route::get('/entidades/{id_entidade}/projeto/criar', "ProjetoController@create");
Route::get('/entidades/{id_entidade}/projeto/guardar', "ProjetoController@store");

Route::get('/entidades/{id_entidade}/notificacoes', "EntidadeController@notificacoes");

Route::get('/estagiario/{id}/meusdados', function () {
    return view('meusdados');
});
