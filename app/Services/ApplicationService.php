<?php

namespace App\Services;

class ApplicationService extends Service
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        return [
            'env' => [
                'php' => phpversion(),
                'laravel' => app()->version(),
                'debug' => config('app.debug'),
                'timezone' => config('app.timezone'),
                'locale' => config('app.locale'),
                'url' => config('app.url'),
                'env' => config('app.env'),
                'cache' => config('cache.default'),
                'session' => config('session.driver'),
                'database' => config('database.default'),
                'filesystem' => config('filesystems.default'),
                'log' => config('logging.default')
            ]
        ];
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @param $request
     */
    public function create()
    {
        return [];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  array  $request
     * @return array
     */
    public function store($request)
    {
        try {
            $this->applicationInterface->update(1, $request);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
