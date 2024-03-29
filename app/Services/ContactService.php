<?php

namespace App\Services;

use App\Http\Resources\ContactCollection;

class ContactService extends Service
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index()
    {
        return [
            'contact' => new ContactCollection($this->contactInterface->paginate(10))
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return array
     */
    public function show($id)
    {
        return [
            'contact' => $this->contactInterface->findById($id)
        ];
    }
}
