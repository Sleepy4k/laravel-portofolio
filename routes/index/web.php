<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\AboutController;
use App\Http\Controllers\Page\IndexController;
use App\Http\Controllers\Page\ContactController;
use App\Http\Controllers\Page\GalleryController;

Route::group(['prefix' => 'index'], function () {
    Route::get('home',
        [IndexController::class, 'index']
    )->name('index.home');

    Route::get('about',
        [AboutController::class, 'index']
    )->name('index.about');

    Route::get('gallery',
        [GalleryController::class, 'index']
    )->name('index.gallery');

    Route::get('create',
        [ContactController::class, 'create']
    )->name('contact.create');
    
    Route::post('store',
        [ContactController::class, 'store']
    )->name('contact.store');
});