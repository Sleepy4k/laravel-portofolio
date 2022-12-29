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
