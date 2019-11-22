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

/**
 * ROTAS PARA AUTENTICAÇÃO
 */
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

/**
 * ROTAS QUE PRECISAM DE AUTENTICAÇÃO PARA SEREM ACESSADAS
 */

//APENAS ROOT
Route::group(['middleware' => ['auth', 'root']], function (){
    Route::get('root', 'RootController@index')->name('root');
    Route::post('root/setDirector', 'RootController@setDirector')->name('setdirector');
});

//NOVO USUÁRIO
Route::group(['middleware' => ['auth', 'notroot']], function (){
    Route::get('myProfile', 'ProfileController@myProfile')->name('myProfile');
    Route::get('myProfile/edit', 'ProfileController@editMyProfile')->name('editarMinhasInfos');
    Route::post('myProfile/edit/save', 'ProfileController@saveEditedProfileInfos')->name('salvarMinhasInfosEditadas');
});

//DEMAIS ROTAS PARA USUÁRIOS AUTENTICADOS
Route::group(['middleware' => ['auth', 'notroot', 'useractive']], function () {
    //-- Rotas para usuário comum --//
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('notifications', 'MainController@verNotificacoes')->name('notificacoes');
    Route::get('/meusPlanos', 'MainController@listarPlanos')->name('meusPlanos');
    Route::get('/meusPlanos/plano/{id}', 'MainController@verPlano')->name('verPlano');
    Route::get('/meusRelatorios', 'MainController@listarRelatorios')->name('meusRelatorios');
    Route::get('/meusRelatorios/relatorio/{id}', 'MainController@verRelatorio')->name('verRelatorio');
    Route::post('/preencherPlano/save', 'MainController@salvarPlano')->name('salvarPlano');
    Route::any('/preencherPlano/{numAba?}', 'MainController@preencherPlano')->name('preencherPlano');
    Route::post('/preencherRelatorio/salvar', 'ReportFillController@salvarRelatorio')->name('salvarRelatorio');
    Route::get('/preencherRelatorio/{numAba?}', 'ReportFillController@preencherRelatorio')->name('preencherRelatorio');
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
});