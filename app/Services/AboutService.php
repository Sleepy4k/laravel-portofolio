<?php

namespace App\Services;

use App\Http\Resources\AboutCollection;

class AboutService extends Service
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        return [
            'about' => $this->aboutInterface->findById(1)
        ];
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @param $request
     */
    public function create()
    {
        return [
            'about' => $this->aboutInterface->findById(1)
        ];
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
            $this->aboutInterface->create($request);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
