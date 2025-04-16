<?php

use Illuminate\Support\Facades\Route;

Route::get('/test/', function () {
    return view('index');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
