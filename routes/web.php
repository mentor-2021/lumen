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

// https://www.onlinecode.org/laravel-lumen-restful-api-tutorial/
$router->get('/status', function () {
    $data = [
        "status" => true,
        "name" => "lumen",
    ];
    return response()->json($data);
});

$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->group(['prefix' => 'users'], function () use ($router) {
        $router->get('/', function () {
            $users = require_once(__DIR__.'/../resources/data/users.php');
            $fb = require_once(__DIR__.'/../resources/data/facebook.php');
            $gmail = require_once(__DIR__.'/../resources/data/gmail.php');

            return response()->json([
                'user' => $users,
                'fb' => $fb,
                'gmail' => $gmail,
            ]);
        });
    });

    $router->group(['prefix' => 'auth'], function () use ($router) {
        $router->post(
            '/',
            ['uses' => 'AuthController@login']
        );
    });
});
