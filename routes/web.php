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
    return $router->app->version();
});

// more simple routes
$router->get('/CustomerList',['uses' => 'UserController@getUsers']);

$router->get('/GetCustomer/{id}', 'UserController@showUsers'); // get user by id

$router->post('/AddCustomer', 'UserController@addUsers'); // create new user record

$router->put('/UpdateCustomer/{id}', 'UserController@updateUsers'); // update user record

$router->delete('/DeleteCustomer/{id}', 'UserController@deleteUsers'); // delete record

