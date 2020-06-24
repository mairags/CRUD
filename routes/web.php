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

// isso aqui é o que faz a junção de um link com o controller
Route::get('produto', 'ProdutoController@index')->name('produto.index');
Route::get('produto/index', 'ProdutoController@index');

Route::get('produto/visualizar/{id}', 'ProdutoController@visualizar')->name('produto.visualizar');
Route::get('produto/adicionar', 'ProdutoController@adicionar')->name('produto.adicionar');

Route::get('/produto/editar/{id}', [ 'as' => 'produto.editar', 'uses' => 'ProdutoController@editar' ]);
Route::post('/produto/salvar', [ 'as' => 'produto.salvar', 'uses' => 'ProdutoController@salvar' ]);
Route::put('/produto/atualizar/{id}', [ 'as' => 'produto.atualizar', 'uses' => 'ProdutoController@atualizar' ]);
Route::delete('/produto/excluir/{id}', [ 'as' => 'produto.excluir', 'uses' => 'ProdutoController@excluir' ]);

// -----------------------------------------------------------------------------------

Route::get('vendas', 'VendasController@index')->name('vendas.index');
Route::get('vendas/index', 'VendasController@index');

Route::get('vendas/visualizar/{id}', 'VendasController@visualizar')->name('vendas.visualizar');
Route::get('vendas/adicionar', 'VendasController@adicionar')->name('vendas.adicionar');

Route::post('/vendas/salvar', [ 'as' => 'vendas.salvar', 'uses' => 'VendasController@salvar' ]);
Route::post('/vendas/arquivar/{id}', [ 'as' => 'vendas.arquivar', 'uses' => 'VendasController@arquivar' ]);

Route::get('/', function () {
    return view('index');
});
