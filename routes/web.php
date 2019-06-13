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

//Admin - Book
Route::match(['get'], '/admin/books', '\\' . \App\Http\Controllers\BookListController::class)->name('books-list');

Route::match(['get', 'post'], '/admin/book/new', '\\' . \App\Http\Controllers\BookNewController::class)->name('book-new');

Route::match(['delete'], '/admin/book-delete', '\\' . \App\Http\Controllers\BookDeliteController::class)->name('books-delite');

Route::match(['get', 'post'], '/admin/book/update/{id?}', '\\' . \App\Http\Controllers\BookUpdateController::class)->name('book-update');

//Admin - Autor
Route::match(['get'], '/admin/autors', '\\' . \App\Http\Controllers\AutorListController::class)->name('autors-list');

Route::match(['get', 'post'], '/admin/autor/new', '\\' . \App\Http\Controllers\AutorNewController::class)->name('autor-new');

Route::match(['delete'], '/admin/autor-delete', '\\' . \App\Http\Controllers\AutorDeleteController::class)->name('form-autors-list');

Route::match(['get', 'post'], '/admin/autor/update/{id?}', '\\' . \App\Http\Controllers\AutorUpdateController::class)->name('autor-update');

//Admin - Heading
Route::match(['get'], '/admin/heading', '\\' . \App\Http\Controllers\HeadingListController::class)->name('headings-list');

Route::match(['get', 'post'], '/admin/heading/new', '\\' . \App\Http\Controllers\AutorNewController::class)->name('heading-new');

Route::match(['delete'], '/admin/heading-delete', '\\' . \App\Http\Controllers\HeadingDeleteController::class)->name('form-headings-list');

Route::match(['get', 'post'], '/admin/heading/update/{id?}', '\\' . \App\Http\Controllers\HeadingUpdateController::class)->name('heading-update');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
//Route::get('/home', 'HomeController@index')->name('home');
