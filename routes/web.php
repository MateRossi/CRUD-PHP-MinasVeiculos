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

Route::get('/veiculo/novo', 'App\Http\Controllers\VeiculosController@create');
Route::post('/veiculo/novo', 'App\Http\Controllers\VeiculosController@store')->name('salvar_veiculo');
Route::get('/veiculo/todos', 'App\Http\Controllers\VeiculosController@show');
Route::get('/veiculo/delete/{id}', 'App\Http\Controllers\VeiculosController@destroy')->name('excluir_veiculo');
Route::get('/veiculo/edit/{id}', 'App\Http\Controllers\VeiculosController@edit')->name('editar_veiculo');
Route::post('/veiculo/edit/{id}', 'App\Http\Controllers\VeiculosController@update')->name('atualizar_veiculo');


/*Route::get('/livro/novo', 'App\Http\Controllers\LivrosController@create');
Route::post('/livro/novo', 'App\Http\Controllers\LivrosController@store')->name('salvar_livro');
Route::get('/livro/listar', 'App\Http\Controllers\LivrosController@show');
Route::get('/livro/del/{id}', 'App\Http\Controllers\LivrosController@destroy')->name('excluir_livro');
Route::get('/livro/edit/{id}', 'App\Http\Controllers\LivrosController@edit')->name('editar_livro');
Route::post('/livro/edit/{id}', 'App\Http\Controllers\LivrosController@update')->name('atualizar_livro');
*/
