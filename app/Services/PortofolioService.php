<?php

namespace App\Services;

class PortofolioService extends Service
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        return [
            'about' => $this->aboutInterface->findById(1),
            'projects' => $this->projectInterface->all()
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
            $this->contactInterface->create($request);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
