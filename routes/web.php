<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/log', [\App\Http\Controllers\LoggerController::class, 'log']);
Route::get('/log/all', [\App\Http\Controllers\LoggerController::class, 'logToAll']);
Route::get('/log/{logger}', [\App\Http\Controllers\LoggerController::class, 'logTo']);
