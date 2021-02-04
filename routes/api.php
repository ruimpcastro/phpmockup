<?php

use App\Http\Controllers\api\EstagiarioResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//ESTAGIARIO
Route::get('/estagiario/all', 'api\EstagiarioResource@index');
Route::get('/estagiario/{id}', 'api\EstagiarioResource@show');
Route::post('/estagiario/guardar', 'api\EstagiarioResource@store');
Route::put('/estagiario/{id}/atualizar', 'api\EstagiarioResource@update');
Route::delete('/estagiario/{id}/apagar', 'api\EstagiarioResource@destroy');

//DIRETOR
Route::get('/diretor/all', 'api\DiretorResource@index');
Route::get('/diretor/{id}', 'api\DiretorResource@show');
Route::post('/diretor/guardar', 'api\DiretorResource@store');
Route::put('/diretor/{id}/atualizar', 'api\DiretorResource@update');
Route::delete('/diretor/{id}/apagar', 'api\DiretorResource@destroy');

//ENTIDADE
Route::get('/entidade/all', 'api\EntidadeResource@index');
Route::get('/entidade/{id}', 'api\EntidadeResource@show');
Route::post('/entidade/guardar', 'api\EntidadeResource@store');
Route::put('/entidade/{id}/atualizar', 'api\EntidadeResource@update');
Route::delete('/entidade/{id}/apagar', 'api\EntidadeResource@destroy');

//NOTIFICACOES
Route::get('/notif/all', 'api\NotificacoesResource@index');
Route::get('/notif/{id}', 'api\NotificacoesResource@show');
Route::post('/notif/guardar', 'api\NotificacoesResource@store');
Route::put('/notif/{id}/atualizar', 'api\NotificacoesResource@update');
Route::delete('/notif/{id}/apagar', 'api\NotificacoesResource@destroy');

//ORIENTADORES
Route::get('/orientador/all', 'api\OrientadoresResource@index');
Route::get('/orientador/{id}', 'api\OrientadoresResource@show');
Route::put('/orientador/{id}/atualizar', 'api\OrientadoresResource@update');

//ORIENTADORES
Route::get('/orientador/all', 'api\OrientadoresResource@index');
Route::get('/orientador/{id}', 'api\OrientadoresResource@show');
Route::put('/orientador/{id}/atualizar', 'api\OrientadoresResource@update');

//PROJETOS
Route::get('/projeto/all', 'api\ProjetosResource@index');
Route::get('/projeto/{id}', 'api\ProjetosResource@show');
Route::post('/projeto/guardar', 'api\ProjetosResource@store');
Route::put('/projeto/{id}/atualizar', 'api\ProjetosResource@update');
Route::delete('/projeto/{id}/apagar', 'api\ProjetosResource@destroy');

//PROJETOS
Route::get('/utilizador/all', 'api\UtilizadoresResource@index');
Route::get('/utilizador/{id}', 'api\UtilizadoresResource@show');
