<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Page\AboutController;
use App\Http\Controllers\Page\IndexController;
use App\Http\Controllers\Page\ContactController;
use App\Http\Controllers\Page\GalleryController;

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

route::get('/', [IndexController::class, 'index'])->name('index');

Route::group(['prefix' => 'index'], function () {
    route::get('home', [IndexController::class, 'index'])->name('index.home');
    route::get('about', [AboutController::class, 'index'])->name('index.about');
    route::get('gallery', [GalleryController::class, 'index'])->name('index.gallery');
    route::get('create', [ContactController::class, 'create'])->name('contact.create');
    
    route::post('store', [ContactController::class, 'store'])->name('contact.store');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    route::get('home', [HomeController::class, 'index'])->name('home');
});

Route::group(['prefix' => 'contact', 'middleware' => ['auth']], function () {
    route::get('index', [ContactController::class, 'index'])->name('contact.index');
    route::get('{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    route::get('{id}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');

    route::post('{id}/update', [ContactController::class, 'update'])->name('contact.update');
});