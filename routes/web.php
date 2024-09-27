<?php

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
    return $router->app->version();
});

$router->get('tradies', function () {
    return view('tradies');  // Returns resources/views/tradies.blade.php
});

$router->get('register', function () {
    return view('register'); 
});

$router->get('search', function () {
    return view('search'); 
});

$router->get('quotes', function () {
    return view('quotes'); 
});

$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('tradies',  ['uses' => 'TradieController@showAllTradies']);

  $router->get('tradies/{id}', ['uses' => 'TradieController@showOneTradie']);

  $router->post('tradies', ['uses' => 'TradieController@create']);

  $router->delete('tradies/{id}', ['uses' => 'TradieController@delete']);

  $router->put('tradies/{id}', ['uses' => 'TradieController@update']);
});
