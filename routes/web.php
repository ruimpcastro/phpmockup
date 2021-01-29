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

Route::get('Diretor/{id_diretor}/validarProjeto/{id_projeto}', "DiretorController@validarProjeto");
Route::get('Diretor/{id_diretor}/justificarProjetoRejeitado/{id_projeto}', "DiretorController@justificarProjetoRejeitado");
Route::get('Diretor/{id_diretor}/atribuirProjetoAluno/{id_aluno}', "DiretorController@atribuirProjetoAluno");
Route::get('Diretor/{id_diretor}/atribuirProjetoSupervisor/{id_supervisor}', "DiretorController@atribuirProjetoSupervisor");

//ESTAGIÁRIO
//Route::get('/estagiario/{id}/meusdados', function () {
//    return view('meusdados');
//});
Route::get('estagiario/{id}/criar', "EstagiarioController@create");
Route::get('estagiario/{id}/guardar', "EstagiarioController@store");

Route::get('estagiario/{id}/verListaProjetos', "EstagiarioController@verListaProjetos");
Route::get('estagiario/{id}/verDetalhesProjeto', "EstagiarioController@verDetalhesProjeto");
Route::get('estagiario/{id}/escolherProjeto', "EstagiarioController@escolherProjeto");
