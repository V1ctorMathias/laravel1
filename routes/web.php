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

Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/categoria', function () {
    return view('categoria');
});

Route::get('/produto-exibir', function () {
    return view('produto-exibir');
});

Route::get('/pedido', function () {
    return view('pedido');
});

Route::get('/contatosView', function () {
    return view('contatosView');
});

Route::get('/generos', 'App\Http\Controllers\GeneroController@index');

Route::get('/generos-view', 'App\Http\Controllers\GeneroController@exibirGeneros');

Route::get('/produtos-view', 'App\Http\Controllers\ProdutoController@exibirProdutos');

Route::get('/categorias-view', 'App\Http\Controllers\CategoriaController@exibirCategorias');

Route::get('/pedidos-view', 'App\Http\Controllers\PedidoController@exibirPedidos');

