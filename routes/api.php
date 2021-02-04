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
