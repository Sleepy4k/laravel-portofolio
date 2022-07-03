<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\AboutController;

Route::group(['prefix' => 'about', 'middleware' => ['auth']], function () {
    route::get('index',
        [AboutController::class, 'main']
    )->name('about.index');

    route::get('create',
        [AboutController::class, 'create']
    )->name('about.create');

    route::post('store',
        [AboutController::class, 'store']
    )->name('about.store');

    route::get('{id}/edit',
        [AboutController::class, 'edit']
    )->name('about.edit');

    route::post('{id}/update',
        [AboutController::class, 'update']
    )->name('about.update');

    route::get('{id}/destroy',
        [AboutController::class, 'destroy']
    )->name('about.destroy');
});