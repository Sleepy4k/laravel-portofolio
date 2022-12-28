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
            'application' => $this->applicationInterface->findById(1)
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
            'application' => $this->applicationInterface->findById(1)
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
            $this->applicationInterface->update(1, $request);

            toastr()->success('Data aplikasi berhasil di tambahkan', 'System');

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
