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

Route::get('/entidades/{id_entidade}/home', "EntidadeController@home");
Route::get('/entidades/{id_entidade}/propostas', "PropostaController@listar_propostas_entidades");
Route::get('/entidades/{id_entidade}/notificacoes', "EntidadeController@notificacoes");


Route::get('/entidades/{id_entidade}/propostas/{id_proposta}/detalhes', "PropostaController@detalhes_propostas_entidades");
Route::get('/entidades/{id_entidade}/propostas/criar', "PropostaController@create");

Route::get('/estagiario/{id}/meusdados', function () {
    return view('meusdados');
});
