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

use App\Models\Book;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/books', function () use ($router) {
    $orderParam = app('request')->get('sort');

    $books = Book::query();

    if ($orderParam) {
        $books->orderByRaw($orderParam);
    }

    return $books->get();
});
