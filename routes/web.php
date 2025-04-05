<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// User Routes
$router->group(['prefix' => 'users'], function () use ($router) {
    $router->get('/users', 'UserController@index');          // Get all users
    $router->post('/users', 'UserController@store');         // Create user (REST standard uses 'store')
    $router->get('/users/{id}', 'UserController@show');       // Get single user
    $router->put('/users/{id}', 'UserController@update');     // Full update
    $router->patch('/users/{id}', 'UserController@update');   // Partial update
    $router->delete('/users/{id}', 'UserController@destroy'); // Delete user
});

// UserJob Routes
$router->group(['prefix' => 'usersjob'], function () use ($router) {
    $router->get('/usersjob', 'UserJobController@index');       // Get all jobs
    $router->get('/usersjob/{id}', 'UserJobController@show');    // Get single job
});

$router->get('/debug', function() {
    return response()->json([
        'routes' => app()->router->getRoutes(),
        'env' => [
            'DB_CONNECTION' => env('DB_CONNECTION'),
            'APP_DEBUG' => env('APP_DEBUG')
        ]
    ]);
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('/users', 'UserController@store');
});