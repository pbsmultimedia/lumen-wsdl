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
    return phpinfo();
});

$router->get('db', function () {
    #$results = DB::select("SELECT TOP 100 * FROM TABLE_NAME_HERE");
    #return dd($results);
});

$router->group(['prefix' => 'protected'], function () use ($router) {
    $router->get('{service}', ['uses' =>'Controller@handleGet']);
    $router->post('{service}', ['uses' =>'Controller@handlePost']);
});
