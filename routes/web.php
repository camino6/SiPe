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

$router->get('/', [
    'as' => 'home.index',
    'uses' => 'HomeController@index',
    'middleware' => 'auth'
]);

$router->group(['prefix' => 'orders', 'middleware' => 'auth'], function () use ($router) {
    $router->get('', ['as' => 'order.index', 'uses' => 'OrderController@index']);

    $router->get('create', ['as' => 'order.create', 'uses' => 'OrderController@create']);

    $router->get('{id}', ['as' => 'order.show', 'uses' => 'OrderController@show']);

    $router->post('', ['as' => 'order.store', 'uses' => 'OrderController@store']);

    $router->get('{id}/edit', ['as' => 'order.edit', 'uses' => 'OrderController@edit']);

    $router->patch('{id}', ['as' => 'order.update', 'uses' => 'OrderController@update']);

    $router->get('{id}/delete', ['as' => 'order.delete', 'uses' => 'OrderController@delete']);

    $router->delete('{id}', ['as' => 'order.destroy', 'uses' => 'OrderController@destroy']);
});

$router->group(['prefix' => 'scrapping', 'middleware' => 'auth'], function () use ($router) {
    $router->get('', ['as' => 'scrapping.index', 'uses' => 'ScrappingController@index']);

    $router->get('create', ['as' => 'scrapping.create', 'uses' => 'ScrappingController@create']);

    $router->get('{id}', ['as' => 'scrapping.show', 'uses' => 'ScrappingController@show']);

    $router->post('', ['as' => 'scrapping.store', 'uses' => 'ScrappingController@store']);

    $router->get('{id}/edit', ['as' => 'scrapping.edit', 'uses' => 'ScrappingController@edit']);

    $router->patch('{id}', ['as' => 'scrapping.update', 'uses' => 'ScrappingController@update']);

    $router->get('{id}/delete', ['as' => 'scrapping.delete', 'uses' => 'ScrappingController@delete']);

    $router->delete('{id}', ['as' => 'scrapping.destroy', 'uses' => 'ScrappingController@destroy']);
});
