<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;



Route::get('/', [MainController::class, 'index'])
    ->name("index");
Route::get('/show/{id}', [MainController::class, 'show'])
    ->name('show');

Route::get('/create', [MainController::class, 'create'])
    ->name('create');
Route::post('store', [MainController::class, 'store'])
    ->name("store");

Route::get('/edit/{id}', [MainController::class, 'edit'])
    ->name("edit");
Route::put('/update/{id}', [MainController::class, 'update'])
    ->name('update');
