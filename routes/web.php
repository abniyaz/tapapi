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

$app->get('/', function () use ($app) {
    return $app->version();
});
$app->get('/test', function () use ($app) {
    return "lel";
});
// Generate random string
$app->get('appKey', function () {
    return str_random('32');
});
//product related api calls  
$app->group(['prefix' => 'product'], function () use ($app) {
    $app->get('list', 'ProductController@index');
    $app->get('list/{id}', 'ProductController@show');
});
//places related api calls 
$app->group(['prefix' => 'places'], function () use ($app) {
    $app->get('list', 'PlacesController@index');
    $app->get('list/{id}', 'PlacesController@show');
});
/*
 * Later create access token to access teh db  ,using open source thanks to Travis
 */
$app->post('accessToken', 'AccessTokenController@createAccessToken');
$app->group(['middleware' => ['auth:api', 'throttle:60']], function () use ($app) {
    $app->post('users', 'UserController@store');
    $app->get('users', 'UserController@index');
    $app->get('users/{id}', 'UserController@show');
    $app->put('users/{id}', 'UserController@update');
    $app->delete('users/{id}', 'UserController@destroy');
});
