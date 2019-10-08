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


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();


//-- Rotas para usuário comum --//


Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('myProfile', 'MainController@myProfile')->name('myProfile');
Route::get('myProfile/edit', 'MainController@editMyProfile')->name('editarMinhasInfos');
Route::post('myProfile/edit/save', 'MainController@saveEditedProfileInfos')->name('salvarMinhasInfosEditadas');
Route::get('notifications', 'MainController@verNotificacoes')->name('notificacoes');

Route::get('/meusPlanos', 'MainController@listarPlanos')->name('meusPlanos');
Route::get('/meusPlanos/plano/{id}', 'MainController@verPlano')->name('verPlano');
Route::get('/meusRelatorios', 'MainController@listarRelatorios')->name('meusRelatorios');
Route::get('/meusRelatorios/relatorio/{id}', 'MainController@verRelatorio')->name('verRelatorio');

Route::post('/preencherPlano/save', 'MainController@salvarPlano')->name('salvarPlano');
Route::any('/preencherPlano/{numAba?}', 'MainController@preencherPlano')->name('preencherPlano');

Route::post('/preencherRelatorio/save', 'MainController@salvarRelatorio')->name('salvarRelatorio');
Route::any('/preencherRelatorio/{numAba?}', 'MainController@preencherRelatorio')->name('preencherRelatorio');


//--  Rotas para admin  --//

Route::get('/listarUsuarios', 'AdminController@listarUsuarios')->name('listarUsuarios');
Route::get('/usuario/{id}', 'AdminController@verUsuario')->name('verUsuario');
Route::get('/usuario/{id}/editarPermissoes', 'AdminController@viewPermissoes')->name('editarPermissao');
Route::post('/usuario/{id}/editarPermissoes/salvar', 'AdminController@salvarPermissoes')->name('salvarPermissoes');

Route::get('periodos/novo', 'AdminController@novoPeriodo')->name('novoPeriodo');
Route::post('periodos/novo/salvar', 'AdminController@salvarNovoPeriodo')->name('salvarNovoPeriodo');
Route::get('/listarPeriodos', 'AdminController@listarPeriodos')->name('listarPeriodos');
Route::get('/periodos/{id}/editarPeriodo', 'AdminController@editarPeriodo')->name('editarPeriodo');
Route::post('/periodos/{id}/editarPeriodo/salvar', 'AdminController@salvarPeriodo')->name('salvarPeriodo');

Route::get('/verPlanos/{period?}', 'AdminController@listarPlanos')->name('listarPlanos');

Route::get('/verRelatorios/{period?}', 'AdminController@listarRelatorios')->name('listarRelatorios');