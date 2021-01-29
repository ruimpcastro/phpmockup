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

//ENTIDADE E PROJETOS
Route::get('/entidades/criar', "EntidadeController@create");
Route::get('/entidades/guardar', "EntidadeController@store");

Route::get('/entidades/{id_entidade}/home', "EntidadeController@home");
Route::get('/entidades/{id_entidade}/projetos', "ProjetoController@listar_projetos_entidades");
Route::get('/entidades/{id_entidade}/projetos/{id_projeto}/detalhes', "ProjetoController@detalhes_projeto_entidades");
Route::get('/entidades/{id_entidade}/projeto/criar', "ProjetoController@create");
Route::get('/entidades/{id_entidade}/projeto/guardar', "ProjetoController@store");
Route::get('/entidades/{id_entidade}/projeto/edit', "ProjetoController@edit");
Route::get('/entidades/{id_entidade}/notificacoes', "EntidadeController@notificacoes");

//DIRETOR (ADMIN)
Route::get('Diretor/{id}/guardar', "DiretorController@store");

Route::get('Diretor/{id_diretor}/validarProposta/{id_proposta}', "DiretorController@validarProposta");
Route::get('Diretor/{id_diretor}/justificarPropostaRejeitada/{id_proposta}', "DiretorController@justificarPropostaRejeitada");
Route::get('Diretor/{id_diretor}/atribuirPropostaAluno/{id_aluno}', "DiretorController@atribuirPropostaAluno");
Route::get('Diretor/{id_diretor}/atribuirPropostaSupervisor/{id_supervisor}', "DiretorController@numeroPropostasPorAluno");

//ESTAGIÁRIO
//Route::get('/estagiario/{id}/meusdados', function () {
//    return view('meusdados');
//});
Route::get('estagiario/{id}/criar', "EstagiarioController@create");
Route::get('estagiario/{id}/guardar', "EstagiarioController@store");

Route::get('estagiario/{id}/verListaPropostas', "EstagiarioController@verListaPropostas");
Route::get('estagiario/{id}/verDetalhesProposta', "EstagiarioController@verDetalhesProposta");
Route::get('estagiario/{id}/escolherProposta', "EstagiarioController@escolherProposta");
