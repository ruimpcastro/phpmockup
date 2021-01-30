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
Route::get('/entidade/criar', "EntidadeController@create");
Route::get('/entidade/guardar', "EntidadeController@store");

Route::get('/entidade/{id_entidade}/home', "EntidadeController@home");
Route::get('/entidade/{id_entidade}/projetos', "ProjetoController@listarProjetosEntidades");
Route::get('/entidade/{id_entidade}/projetos/{id_projeto}/detalhes', "ProjetoController@detalhesProjetoEntidades");
Route::get('/entidade/{id_entidade}/projeto/criar', "ProjetoController@create");
Route::get('/entidade/{id_entidade}/projeto/guardar', "ProjetoController@store");
Route::get('/entidade/{id_entidade}/projeto/edit', "ProjetoController@edit");
Route::get('/entidade/{id_entidade}/notificacoes', "EntidadeController@notificacoes");

//DIRETOR (ADMIN)
Route::get('/diretor/guardar', "DiretorController@store");

Route::get('/diretor/{id_diretor}/home, DiretorController@home');
Route::get('/diretor/{id_diretor}/validarProjeto/{id_projeto}', "DiretorController@validarProjeto");
Route::get('/diretor/{id_diretor}/justificarProjetoRejeitado/{id_projeto}', "DiretorController@justificarProjetoRejeitado");
Route::get('/diretor/{id_diretor}/atribuirProjeto', "DiretorController@atribuirProjeto");
Route::get('/diretor/{id_diretor}/atribuirProjetoAluno/{id_aluno}', "DiretorController@atribuirProjetoAluno");
Route::get('/diretor/{id_diretor}/atribuirProjetoSupervisor/{id_supervisor}', "DiretorController@atribuirProjetoSupervisor");
Route::get('/diretor/{id_diretor}/numeroPropostas, DiretorController@numeroPropostasPorAluno');

//ESTAGIÁRIO
//Route::get('/estagiario/{id}/meusdados', function () {
//    return view('meusdados');
//});
Route::get('/estagiario/criar', "EstagiarioController@create");
Route::get('/estagiario/guardar', "EstagiarioController@store");

Route::get('/estagiario/{id_estagiario}/home', "EstagiarioController@home");
Route::get('/estagiario/{id_estagiario}/verProjetos', "EstagiarioController@verListaProjetos");
Route::get('/estagiario/{id_estagiario}/verProjetos/{id_projeto}', "EstagiarioController@verDetalhesProjeto");
Route::get('/estagiario/{id_estagiario}/escolherProjeto', "EstagiarioController@escolherProjeto");


//ORIENTADOR
Route::get('/orientador/guardar', "Orientador@store");

Route::get('/orientador/{id_orientador}/home', "Orientador@home");
Route::get('/orientador/{id_orientador}/verDetalhesProjeto/{id_Projeto}', "Orientador@verProjeto");
