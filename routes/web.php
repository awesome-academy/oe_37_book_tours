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

Route::get('/login', 'LoginController@getLogin')->name('getAdminLogin');
Route::post('/login', 'LoginController@postLogin')->name('postAdminLogin');
Route::get('/logout', 'LoginController@getLogOut')->name('getAdminLogOut');

Route::group(['middleware' => 'adminLogin'], function () {
    Route::get('/', 'LoginController@getAdminIndex')->name('getAdminIndex');
    Route::resource('types', 'TypesController')->except([
        'show'
    ]);

    Route::resource('users', 'UsersController')->except([
        'show'
    ]);

    Route::resource('tours', 'ToursController');

    Route::resource('bookings', 'BookingsController')->except([
        'create', 'edit', 'store'
    ]);

    Route::resource('reviews', 'UserReviewsController')->except([
        'create', 'edit', 'store'
    ]);

    Route::resource('revenues', 'RevenuesController')->except([
        'edit', 'update'
    ]);
});

//----------frontend-------------------------------------------
Route::prefix('booking')->group(function () {
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('tours', 'HomeController@tours')->name('home.tours');
    Route::get('tours/{id}', 'HomeController@tourDetail')->name('tour.detail');
    Route::view('errors', 'book_tour.pages.errors')->name('errors');
    Route::get('categories/{id}/tours', 'HomeController@tourByCategory')->name('tour.category');
//-------------auth---------------------------------------------
    Route::get('register', 'UserController@getFormRegister')->name('register.get');
    Route::post('register', 'UserController@register')->name('register.post');
    Route::get('login', 'UserController@getFormLogin')->name('login.get');
    Route::post('login', 'UserController@login')->name('login.post');
    Route::get('search/tours', 'HomeController@searchTour')->name('search.tours');
//-----------checkout-------------------------------------------
    Route::get('checkout/{id}/tour', 'BookingTourController@getFormCheckout')->name('checkout.get');
    Route::post('checkout/{id}/tour', 'BookingTourController@checkout')->name('checkout.post');
    Route::get('districts/{id}', 'AddressController@getDistricts');
    Route::get('wards/{id}', 'AddressController@getWards');
});
