<?php

/** @var $router \Laravel\Lumen\Routing\Router */

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
    $posts = \App\Post::paginate(50);
    return [
        "posts" => $posts,
    ];
});
