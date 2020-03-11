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
Broadcast::routes();

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
    /*
     * Para a middleware checkpermissions use como separador | para mais de uma permissão a ser checada para o usuário logado na rota solicitada
     * Ex:
     * Route::get(...)->middleware('checkpermissions:seePlans|registerPlan');
     */
    Route::get('notifications', 'NotificationController@json')->name('notifications');
    Route::get('/notificacoes/{id?}', 'NotificationController@notificacoes')->name('notificacoes');
    Route::get('/notificacoes/lida/{id?}', 'NotificationController@markAsRead')->name('markAsRead');
    //-- Rotas para usuário comum --//
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/meusPlanos', 'PlanController@listarPlanos')->name('meusPlanos');
    Route::get('/meusPlanos/plano/{id}', 'PlanController@verPlano')->name('verPlano');
    Route::get('/meusRelatorios', 'MainController@listarRelatorios')->name('meusRelatorios');
    Route::get('/meusRelatorios/relatorio/{id}', 'MainController@verRelatorio')->name('verRelatorio');
    Route::post('/preencherPlano/save', 'PlanController@salvarPlano')->name('salvarPlano')->middleware('checkpermissions:registerPlan');
    Route::any('/preencherPlano/{period_id?}/{numAba?}', 'PlanController@preencherPlano')->name('preencherPlano')->middleware('checkpermissions:registerPlan');
    Route::post('/preencherRelatorio/salvar', 'ReportFillController@salvarRelatorio')->name('salvarRelatorio')->middleware('checkpermissions:registerPlan');
    Route::get('/preencherRelatorio/{numAba?}', 'ReportFillController@preencherRelatorio')->name('preencherRelatorio')->middleware('checkpermissions:registerPlan');
    //--  Rotas para admin  --//
    Route::get('/listarUsuarios', 'AdminController@listarUsuarios')->name('listarUsuarios')->middleware('checkpermissions:seeUsersList');
    Route::get('/usuario/{id}/setstatus', 'AdminController@setStatusUsuario')->name('setStatus')->middleware('checkpermissions:setPermissions');
    Route::get('/usuario/{id}', 'AdminController@verUsuario')->name('verUsuario')->middleware('checkpermissions:seeUsersList');
    Route::get('/usuario/{id}/editarPermissoes', 'AdminController@viewPermissoes')->name('editarPermissao')->middleware('checkpermissions:setPermissions');
    Route::post('/usuario/{id}/editarPermissoes/salvar', 'AdminController@salvarPermissoes')->name('salvarPermissoes')->middleware('checkpermissions:setPermissions');
    Route::get('periodos/novo', 'AdminController@novoPeriodo')->name('novoPeriodo')->middleware('checkpermissions:setSubmissionPeriod');
    Route::post('periodos/novo/salvar', 'AdminController@salvarNovoPeriodo')->name('salvarNovoPeriodo')->middleware('checkpermissions:setSubmissionPeriod');
    Route::get('/listarPeriodos', 'AdminController@listarPeriodos')->name('listarPeriodos');
    Route::get('/periodos/{id}/editarPeriodo', 'AdminController@editarPeriodo')->name('editarPeriodo')->middleware('checkpermissions:setSubmissionPeriod');
    Route::get('/periodos/{id}/excluir', 'AdminController@excluirPeriodo')->name('excluirPeriodo')->middleware('checkpermissions:setSubmissionPeriod');
    Route::post('/periodos/{id}/editarPeriodo/salvar', 'AdminController@salvarPeriodo')->name('salvarPeriodo')->middleware('checkpermissions:setSubmissionPeriod');
    Route::get('/verPlanos/{period?}', 'AdminController@listarPlanos')->name('listarPlanos')->middleware('checkpermissions:seePlans');
    Route::get('/verRelatorios/{period?}', 'AdminController@listarRelatorios')->name('listarRelatorios')->middleware('checkpermissions:seePlans');
});
