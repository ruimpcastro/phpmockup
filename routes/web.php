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

Route::get('/login', "UtilizadorController@listarUtilizadoresLogin");

//ENTIDADE
Route::get('/entidade/criar', "EntidadeController@create");
Route::get('/entidade/guardar', "EntidadeController@store");

Route::get('/entidade/{id_entidade}/home', "EntidadeController@home");
Route::get('/entidade/{id_entidade}/projeto', "EntidadeController@listarProjetos");
Route::get('/entidade/{id_entidade}/projeto/{id_projeto}/detalhes', "EntidadeController@detalhesProjeto");
Route::get('/entidade/{id_entidade}/projeto/criar', "ProjetoController@create");
Route::get('/entidade/{id_entidade}/projeto/{id_projeto}/editar', "EntidadeController@editarProjeto");
Route::post('/entidade/{id_entidade}/projeto/guardar', "ProjetoController@store");
Route::get('/entidade/{id_entidade}/notificacoes', "EntidadeController@notificacoes");
Route::get('/entidade/{id_entidade}/orientador', "EntidadeController@listarOrientadores");

//PROJETOS
Route::put('/projeto/{id_projeto}/editar', "ProjetoController@update");

//DIRETOR (ADMIN)
Route::get('/diretor/guardar', "DiretorController@store");

Route::get("/diretor/{id_diretor}/home","DiretorController@home");
Route::get("/diretor/{id_diretor}/entidade","DiretorController@listarEntidades");
Route::get("/diretor/{id_diretor}/entidade/criar","DiretorController@createEntidade");
Route::post("/diretor/{id_diretor}/entidade/guardar","DiretorController@guardarEntidade");
//TODO: entidade/detalhes
Route::get('/diretor/{id_diretor}/projeto', "DiretorController@listarProjetos");
Route::get('/diretor/{id_diretor}/projeto/{id_projeto}/detalhes', "DiretorController@detalhesProjeto");
Route::get('/diretor/{id_diretor}/projeto/{id_projeto}/justificarReprovacao/', "DiretorController@justificarReprovacao");
Route::post('/diretor/{id_diretor}/projeto/{id_projeto}/reprovar/', "NotificacaoController@store");
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
