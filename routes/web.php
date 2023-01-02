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

/*
|--------------------------------------------------------------------------
| Public Route
|--------------------------------------------------------------------------
|
| You can list public API for any user in here. These routes are not guarded
| by any authentication system. In other words, any user can access it directly.
| Remember not to list anything of importance, use authenticate route instead.
*/

Route::get('/', 'PortofolioController@index')->name('landing.index');
Route::post('contact', 'ContactController@store')->name('contact.store');
Route::get('translate/get/{trans}', 'TranslateController@show')->name('translate.show');

/*
|--------------------------------------------------------------------------
| Unauthenticated Route
|--------------------------------------------------------------------------
|
| You can list public API for any user in here. These routes are meant
| to be used for guests and are not guarded by any authentication system.
| Remember not to list anything of importance, use authenticate route instead.
*/

Route::middleware('guest')->group(function () {
    Route::resource('login', 'AuthenticatedController')->only('index', 'store');
});

/*
|--------------------------------------------------------------------------
| Authenticated Route
|--------------------------------------------------------------------------
|
| In here you can list any route for authenticated user. These routes
| are meant to be used privately since the access is exclusive to authenticated
| user who had obtained their sanctum token from login API!
*/

Route::middleware('auth')->group(function () {
    Route::post('logout', 'AuthenticatedController@destroy')->name('logout');
    Route::get('dashboard', 'DashboardController@index')->middleware('verified')->name('dashboard.index');

    Route::prefix('dashboard')->group(function () {
        // Single endpoint
        Route::get('profile', 'ProfileController@edit')->name('profile.edit');
        Route::patch('profile', 'ProfileController@update')->name('profile.update');

        // Resource endpoint 
        Route::resource('project', 'ProjectController');
        Route::resource('translate', 'TranslateController')->except('show');
        Route::resource('contact', 'ContactController')->only('index', 'show');
        Route::resource('about', 'AboutController')->only('index', 'create', 'store');
        Route::resource('setting', 'ApplicationController')->only('index', 'create', 'store');
    });
});
