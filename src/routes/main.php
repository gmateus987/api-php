<?php

use App\Http\Route;

Route::get('/register', 'ViewController::register');
Route::post('/users/create', 'UserController::store');

Route::get('/login','ViewController::login');
Route::post('/users/login', 'UserController::login');

Route::get('/fetch','ViewController::fetch');
Route::get('/users/fetch', 'UserController::fetch');

Route::get('/update', 'ViewController::update');
Route::put('/users/update', 'UserController::update');

Route::get('/delete', 'ViewController::delete');
Route::delete('/users/delete', 'UserController::remove');



