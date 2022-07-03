<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\HomeController;
use App\Http\Controllers\Page\IndexController;

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

route::get('/',
    [IndexController::class, 'index']
)->name('index');

require __DIR__.'/index/web.php';

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    route::get('home',
        [HomeController::class, 'index']
    )->name('home');
});

require __DIR__.'/gallery/web.php';

require __DIR__.'/about/web.php';

require __DIR__.'/contact/web.php';