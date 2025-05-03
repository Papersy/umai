<?php

use App\Http\Controllers\InstructionController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\FavoriteController;
use Illuminate\Support\Facades\Route;

Route::get('/instruction/{slug}', [InstructionController::class, 'show'])->name('instruction.show');

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/recipe', [RecipeController::class, 'show'])->name('recipe');

Route::post('/toggle-favorite/{slug}', [FavoriteController::class, 'toggle'])->name('favorite.toggle');

Route::get('/favorites', [RecipeController::class, 'favorites'])->name('favorites');

