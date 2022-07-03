<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\ContactController;

Route::group(['prefix' => 'contact', 'middleware' => ['auth']], function () {
    route::get('index',
        [ContactController::class, 'index']
    )->name('contact.index');

    route::get('{id}/edit',
        [ContactController::class, 'edit']
    )->name('contact.edit');

    route::post('{id}/update',
    [ContactController::class, 'update']
    )->name('contact.update');
    
    route::get('{id}/destroy',
        [ContactController::class, 'destroy']
    )->name('contact.destroy');
});