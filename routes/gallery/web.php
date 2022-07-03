<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'gallery', 'middleware' => ['auth']], function () {
    route::get('index',
        [GalleryController::class, 'main']
    )->name('gallery.index');

    route::get('create',
        [GalleryController::class, 'create']
    )->name('gallery.create');

    route::post('store',
        [GalleryController::class, 'store']
    )->name('gallery.store');

    route::get('{id}/edit',
        [GalleryController::class, 'edit']
    )->name('gallery.edit');

    route::post('{id}/update',
        [GalleryController::class, 'update']
    )->name('gallery.update');

    route::get('{id}/destroy',
        [GalleryController::class, 'destroy']
    )->name('gallery.destroy');
});