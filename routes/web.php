<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return 'API REST To-do-List';
});


$router->group(['prefix' => 'tarefas'], function() use ($router){

    $router->get('/','TarefaController@index');
    $router->get('/{tarefa}','TarefaController@show');

    $router->post('/novo','TarefaController@store');
    $router->put('/{tarefa}','TarefaController@update');
    $router->delete('/{tarefa}','TarefaController@destroy');


    /*
        Recurso: Tarefa
        Endpoint: /tarefa (tarefas)
        GET, POST, PUT, DELETE
    */

});

$router->group(['prefix' => 'tipo'], function() use ($router){

    $router->get('/','TipoController@index');
    $router->get('/{tipo}','TipoController@show');

    $router->post('/novo','TipoController@store');
    $router->put('/{tipo}','TipoController@update');
    $router->delete('/{tipo}','TipoController@destroy');


    /*
        Recurso: Tarefa
        Endpoint: /tarefa (tarefas)
        GET, POST, PUT, DELETE
    */

});