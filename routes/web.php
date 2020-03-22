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
$router->get('/collections', function () {
    return \App\Collection::all();
});

$router->get('/all', function () {
    return \App\Artwork::all();
});

$router->get('/collection/{collection}', 'CollectionController@collection');

$router->post('/create', 'ArtworkController@create');
