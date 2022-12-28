<?php

namespace App\Observers;

use App\Models\Application;
use Illuminate\Support\Facades\Cache;

class ApplicationObserver
{
    /**
     * Handle the Application "created" event.
     *
     * @param  \App\Models\Application  $application
     * @return void
     */
    public function created(Application $application)
    {
        if (Cache::has('application.1')) {
            Cache::forget('application.1');
        }

        Cache::put('application.1', $application, now()->addDays(rand(1,2)));
    }

    /**
     * Handle the Application "updated" event.
     *
     * @param  \App\Models\Application  $application
     * @return void
     */
    public function updated(Application $application)
    {
        if (Cache::has('application.1')) {
            Cache::forget('application.1');
        }

        Cache::put('application.1', $application, now()->addDays(rand(1,2)));
    }
}
