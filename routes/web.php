<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','\\' . \App\Http\Controllers\IndexController::class)->name('main');

Route::get('/autor/{key}','\\' . \App\Http\Controllers\BooksByAutorController::class)->name('books_by_autor');

Route::get('/heading/{key}','\\' . \App\Http\Controllers\BooksByHeadingController::class)->name('books_by_heading');