<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('form', 'user-form');
Route::post('adduser', [userController::class, 'addUser']);