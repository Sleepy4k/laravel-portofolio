<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\EloquentInterface', 'App\Repositories\EloquentRepository');
        $this->app->bind('App\Contracts\Models\UserInterface', 'App\Repositories\Models\UserRepository');
        $this->app->bind('App\Contracts\Models\AboutInterface', 'App\Repositories\Models\AboutRepository');
        $this->app->bind('App\Contracts\Models\ContactInterface', 'App\Repositories\Models\ContactRepository');
        $this->app->bind('App\Contracts\Models\ProjectInterface', 'App\Repositories\Models\ProjectRepository');
        $this->app->bind('App\Contracts\Models\LanguageInterface', 'App\Repositories\Models\LanguageRepository');
        $this->app->bind('App\Contracts\Models\ApplicationInterface', 'App\Repositories\Models\ApplicationRepository');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // 
    }
}
