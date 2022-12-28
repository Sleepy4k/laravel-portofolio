<?php

namespace App\Providers;

use App\Models;
use App\Observers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        // Models Observer
        Models\User::observe(Observers\UserObserver::class);
        Models\Application::observe(Observers\ApplicationObserver::class);
        
        // Database Query
        Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
            Log::channel('query')->info('query : '.$query->sql.' | time '.$query->time.' | connection '.$query->connection->getName());
        });
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return true;
    }
}
