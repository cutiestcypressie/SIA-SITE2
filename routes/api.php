<?php

use App\Http\Controllers\UserController;

// For GET all users
Route::get('/users', [UserController::class, 'index']);

// For POST (e.g., creating a user)
Route::post('/users', [UserController::class, 'store']);
