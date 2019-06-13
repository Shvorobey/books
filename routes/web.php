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

Route::get('/single_book/{id}','\\' . \App\Http\Controllers\SingleBookController::class)->name('single_book');

Route::get('/about', 'ShowPagesController@about')->name('about');

Route::get('/contact', 'ShowPagesController@contact')->name('contact');

Route::get('/locator', function () { return view('locator');})->name('locator');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
//Route::get('/home', 'HomeController@index')->name('home');
