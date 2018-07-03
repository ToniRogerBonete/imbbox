<?php

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

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sobre-nos', 'SobreController@index');
Route::get('/galerias', 'GaleriaController@index');
Route::get('/galerias/{categoria}/{id}', function() {
    return view('galerias.galerias-lista');
});
Route::get('/galerias/{categoria}/{galeria}/{id}', function() {
    return view('galerias.galeria-itens');
});
Route::get('/catalogo', 'CatalogoController@index');
Route::get('/produtos', 'ProdutoController@index');
Route::get('/produtos/{categoria}/{id}', function() {
    return view('produtos.produtos-lista');
});
Route::get('/produtos/{categoria}/{produto}/{id}', function() {
    return view('produtos.produto-ver');
});
Route::get('/onde-encontrar', 'RepresentanteController@index');
Route::get('/fale-conosco', 'ContatoController@index');
Route::get('/trabalhe-conosco', function() {
    return view('trabalhe-conosco.trabalhe-conosco');
});
