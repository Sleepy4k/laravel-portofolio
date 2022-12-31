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
}
