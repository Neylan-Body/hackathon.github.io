<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', 'HomeController@tela_editais');
// Route::get('/home', 'HomeController@tela_inicial');
Route::get('/inicio', 'HomeController@');

Route::get('/rodadeconversa', function () {
    return view('roda_conversa');
});

Route::get('/live/124hdfds3453', function () {
    return view('live_exemplo');
});

Route::get('/curso/sistemasdeinformacao', function () {
    return view('sistema_de_informacao');
});

Route::get('/', function () {
    return view('tela_inicial');
});

Route::get('/home', function () {
    return view('tela_inicial');
});

Route::get('/inscricao', 'HomeController@tela_consultar_inscricao');

Route::get('/matricula', 'HomeController@tela_consultar_matricula');

// Route::group(['prefix' => 'edital', 'where' => ['id' => '[0-9]+']], function() {
//     Route::get('', ['as' => 'edital.index', 'uses' => 'EditalController@index']);
//     Route::get('/create', ['as' => 'edital.create', 'uses' => 'EditalController@create']);
//     Route::post('/create', ['as' => 'edital.store', 'uses' => 'EditalController@store']);
//     Route::get('/{id}', ['as' => 'edital.show', 'uses' => 'EditalController@show']);
//     Route::get('/{id}/edit', ['as' => 'edital.edit', 'uses' => 'EditalController@edit']);
//     Route::patch('/{id}', ['as' => 'edital.update', 'uses' => 'EditalController@update']);
//     Route::delete('/{id}', ['as' => 'edital.destroy', 'uses' => 'EditalController@destroy']);
// });

Route::get('/funcao/create', 'FuncaoController@create');
Route::get('/funcao', 'FuncaoController@index');


// Route::group(['prefix' => 'inscricao', 'where' => ['id' => '[0-9]+']], function() {
//     Route::get('', ['as' => 'inscricao.index', 'uses' => 'InscricaoController@index']);
//     Route::get('/create', ['as' => 'inscricao.create', 'uses' => 'InscricaoController@create']);
//     Route::post('/create', ['as' => 'inscricao.store', 'uses' => 'InscricaoController@store']);
//     Route::get('/{id}', ['as' => 'inscricao.show', 'uses' => 'InscricaoController@show']);
//     Route::get('/{id}/edit', ['as' => 'inscricao.edit', 'uses' => 'InscricaoController@edit']);
//     Route::patch('/{id}', ['as' => 'inscricao.update', 'uses' => 'InscricaoController@update']);
//     Route::delete('/{id}', ['as' => 'inscricao.destroy', 'uses' => 'InscricaoController@destroy']);
// });

Route::resources([ 
    'edital' => 'EditalController',
    'user' => 'UserController',
    'funcao' => 'FuncaoController',
    'inscricao' => 'InscricaoController',
    'banca' => 'BancaController']);

Route::get('/relatorios', 'RelatorioController@create');

Route::get('/banca', 'BancaController@index');



Route::auth();
Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

