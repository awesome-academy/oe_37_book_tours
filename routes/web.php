<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('admin-layout.admin-index');
});

Route::resource('types', 'TypesController')->except([
    'show'
]);

Route::resource('users', 'UsersController')->except([
    'show'
]);

Route::resource('tours', 'ToursController');

//----------frontend-------------------------------------------
Route::prefix('booking')->group(function () {
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('tours', 'HomeController@tours')->name('home.tours');
    Route::get('tours/{id}', 'HomeController@tourDetail')->name('tour.detail');
    Route::view('errors', 'book_tour.pages.errors')->name('errors');
    Route::get('categories/{id}/tours', 'HomeController@tourByCategory')->name('tour.category');
});
