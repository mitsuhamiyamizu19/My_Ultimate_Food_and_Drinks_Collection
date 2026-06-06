<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FavoriteController;

Route::get('/', [FavoriteController::class, 'index']);

Route::resource('favorites', FavoriteController::class);
