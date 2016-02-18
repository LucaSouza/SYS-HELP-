<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('bem-vindo');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/registrar-cliente','ClienteController@registrarClienteView');
    Route::post('/registrar-cliente','ClienteController@registrarCliente');

    Route::get('/cliente/{id}/perfil','ClienteController@perfil');
    Route::get('/cliente/{id}/editar-cliente','ClienteController@editarClienteView');
    Route::post('/cliente/{id}/editar-cliente','ClienteController@editarCliente');

    Route::get('/cliente/{id}/registrar-computador','ClienteController@registrarComputadorView');
    Route::post('/cliente/{id}/registrar-computador','ClienteController@registrarComputador');
    Route::get('/cliente/{id}/computador/{id_computador}','ClienteController@perfilComputadorView');
    Route::get('/cliente/{id}/excluir-computador/{id_computador}','ClienteController@excluirComputador');
    Route::post('/cliente/{id}/alterar-computador/{id_computador}','ClienteController@alterarComputador');
    Route::get('/cliente/{id}/transferir-computador/{id_computador}','ClienteController@transferirComputadorView');
    Route::get('/cliente-{id}/transferir-periferico-{id_computador}-para-{id_cliente_destino}','ClienteController@transferirComputador');

    Route::get('/cliente/{id}/registrar-periferico','ClienteController@registrarPerifericoView');
    Route::post('/cliente/{id}/registrar-periferico','ClienteController@registrarPeriferico');
    Route::get('/cliente/{id}/excluir-periferico/{id_periferico}','ClienteController@excluirPeriferico');
    Route::post('/cliente/{id}/alterar-periferico/{id_periferico}','ClienteController@alterarPeriferico');
    Route::get('/cliente/{id}/periferico/{id_periferico}','ClienteController@perfilPerifericoView');
    Route::get('/cliente/{id}/transferir-periferico/{id_periferico}','ClienteController@transferirPerifericoView');
    Route::get('/cliente-{id}/transferir-periferico-{id_periferico}-para-{id_cliente_destino}','ClienteController@transferirPeriferico');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
