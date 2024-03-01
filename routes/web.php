<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/kyla',['uses' => 'UserController@getUsers']);
$router->get('/snow', 'UserController@index'); // get all users records
$router->post('/rocky', 'UserController@add');
$router->get('/caramel/{id}', 'UserController@show'); // get user by id
$router->put('/cake/{id}', 'UserController@update');
$router->patch('/oishi/{id}', 'UserController@update');
$router->delete('/oreo/{id}', 'UserController@delete');

$router->get('/', function () use ($router) {
    return $router->app->version();
});
