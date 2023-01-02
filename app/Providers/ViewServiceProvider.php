<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Page;
use App\Models\Company;
use App\Models\Category;
use App\Models\Application;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('app', function ($view) {
            $retVal = (Cache::has('application.1')) ? Cache::get('application.1') : Application::findOrFail(1);
            $view->with('application', $retVal);
        });
    }
}
