<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// User routes
$router->get('/users', 'UserController@index');          // get all users records
$router->post('/users', 'UserController@add');           // create new user record
$router->get('/users/{id}', 'UserController@show');      // get user by id
$router->put('/users/{id}', 'UserController@update');    // update user record
$router->patch('/users/{id}', 'UserController@update');  // update user record
$router->delete('/users/{id}', 'UserController@delete'); // delete record

// User job routes
$router->get('/usersjob', 'UserJobController@index');    // Get all jobs
$router->get('/usersjob/{id}', 'UserJobController@show'); // Get job by ID
    