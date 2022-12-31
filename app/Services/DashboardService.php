<?php

namespace App\Services;

use Illuminate\Foundation\Application;

class DashboardService extends Service
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        return [
            'phpVersion' => PHP_VERSION,
            'laravelVersion' => Application::VERSION
        ];
    }
}
